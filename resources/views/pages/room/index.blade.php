@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        {{-- 1. Judul disesuaikan --}}
        <h1 class="h3 mb-0 text-gray-800">Data Ruangan</h1>
        <div>
            {{-- TOMBOL TAMBAH DATA --}}
            <a href="{{ route('room.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
            </a>
        </div>
    </div>

    {{-- tabel--}}
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Ruangan</th>
                                    <th>Kode Ruangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- 2. Menggunakan @forelse untuk kode yang lebih bersih dan aman --}}
                                @forelse ($rooms as $ro)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $ro->name }}</td>
                                    <td>{{ $ro->kode }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('room.edit', $ro->id) }}" class="d-inline-block mr-2 btn btn-sm btn-warning">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmationDelete-{{ $ro->id }}">
                                                <i class="fas fa-eraser"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @include('pages.room.confirmation-delete')
                                @empty
                                {{-- Bagian ini akan otomatis ditampilkan jika $rooms kosong --}}
                                <tr>
                                    {{-- 3. Colspan disesuaikan dengan jumlah kolom --}}
                                    <td colspan="4" class="text-center">
                                        <p class="pt-3">Tidak Ada Data</p>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

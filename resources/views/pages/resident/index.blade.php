@extends('layouts.app')

@section('content')
            <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Warga</h1>
            <a href="/resident/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
             class="fas fa-plus fa-sm text-white-50"></i>
             Tambah</a>
        </div>
    {{-- tabel--}}
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-bordered table-hovered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Status Tinggal</th>
                            <th>jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @if (count($residents) <1 )
                        <tbody>
                            <tr>
                                <td colspan="9">
                                    <p class="pt-3 text-center">Tidak Ada Data</p>
                                </td>
                            </tr>
                        </tbody>
                    @else
                    <tbody>
                        @foreach ($residents as $res)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $res->status_tinggal }}</td>
                            <td>{{ $res->jumlah}}</td>
                            <td>

                                <div class="d-flex">
                                    {{-- GANTI TOMBOL LAMA ANDA DENGAN INI --}}
                                    <a href="{{ route('resident.edit', $res->id) }}" class="d-inline-block mr-2 btn btn-sm btn-warning">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmationDelete-{{ $res->id }}">
                                        <i class="fas fa-eraser"></i>
                                    </button>
                                </div>
                            </td>
                        </tr> 
                        @include('pages.resident.confirmation-delete')
                        @endforeach
                    </tbody>
                    @endif
                    </table>
                    <div class="d-flex justify-content-end">
                        <strong>Total Data: {{ $total_jumlah }} Warga</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
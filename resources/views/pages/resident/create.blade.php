@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Tambah Data Warga</h1>
    </div>
    <div class="row">
        <div class="col">
            <form action="/resident" method="POST">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-body">
                        <!-- Perhatikan: nama field 'agama' sudah diperbaiki menjadi huruf kecil semua -->
                        <div class="form-group mb-3">
                            <label for="status_tinggal">Status Tinggal</label>
                            <select name="status_tinggal" id="status_tinggal" class="form-control">
                                <option value="tetap">Tetap</option>
                                <option value="pindahan">Pindahan</option>    
                            </select>
                        </div>
                        <div class="form-control mb-3">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" name="jumlah" id="jumlah' class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end" style="gap: 10px;">
                            <a href="/resident" class="btn btn-outline-secondary">
                                Kembali
                            </a>

                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Tambah Data Warga</h1>
    </div>
    <div class="row">
        <div class="col">
            <form action="/resident" method="post">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-body">
                        <!-- Perhatikan: nama field 'agama' sudah diperbaiki menjadi huruf kecil semua -->
                        <div class="form-group mb-3">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" inputmode="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="gender">Jenis Kelamin</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>    
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="agama">Agama</label>
                            <input type="text" name="agama" id="agama" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="status_pekerjaan">Status Pekerjaan</label>
                            <select name="status_pekerjaan" id="status_pekerjaan" class="form-control">
                                <option value="bekerja">Bekerja</option>
                                <option value="tidak bekerja">Tidak Bekerja</option>    
                            </select>
                        </div>
                        <!-- Perhatikan: nama field 'status_pendidikan' sudah diperbaiki menjadi huruf kecil dengan underscore -->
                        <div class="form-group mb-3">
                            <label for="status_pendidikan">Status Pendidikan</label>
                            <select name="status_pendidikan" id="status_pendidikan" class="form-control">
                                <option value="sekolah">Sekolah</option>
                                <option value="tamat sekolah">Tamat Sekolah</option>
                                <option value="putus sekolah">Putus Sekolah</option>    
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="status_hubungan">Status Hubungan</label>
                            <select name="status_hubungan" id="status_hubungan" class="form-control">
                                <option value="belum menikah">Belum Menikah</option>
                                <option value="menikah">Menikah</option>
                                <option value="cerai">Cerai</option>
                                <option value="janda/duda">Janda/Duda</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="status_tinggal">Status Tinggal</label>
                            <select name="status_tinggal" id="status_tinggal" class="form-control">
                                <option value="tetap">Tetap</option>
                                <option value="pindahan">Pindahan</option>    
                            </select>
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

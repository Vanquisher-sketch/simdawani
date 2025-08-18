@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Tambah Data Warga</h1>
        </div>

        <div class="row">
            <div class="col">
                <form action="/resident " method="post">
                    @csrf
                    @method('POST')
                    <div class="card">
                        <div class="card-body">
                            <div class="form-grup">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date"  inputmode= "date"name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                            </div>
                            <div class="form-grup">
                                <label for="gender">Jenis Kelamin</label>
                                <select name="gender" class="form-control" id="gender">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-grup">
                                <label for="alamat">Alamat</label>
                                <textarea name="Alamat" id="alamat" cols="30" rows="10" 
                                class="form-control"></textarea>
                            </div>
                            <div class="form-grup">
                                <label for="Agama" >Agama</label>
                                <input type="text" name="Agama" class="form-control" id="Agama">
                            </div>
                            <div class="form-grup">
                                <label for="status_pekerjaan">Status Pekerjaan</label>
                                <select name="status_pekerjaan" class="form-control" id="status_pekerjaan">
                                    <option value="bekerja">bekerja</option>
                                    <option value="tidak bekerja">Tidak Bekerja</option>
                                </select>
                            </div>
                           <div class="form-grup">
                                <label for="Status_Pendidikan">Status Pendidikan</label>
                                <select name="Status_Pendidikan" class="form-control" id="Status_Pendidikan">
                                    <option value="sekolah">Sekolah</option>
                                    <option value="tamat sekolah">Tamat Sekolah</option>
                                    <option value="putus sekolah">Putus Sekolah</option>
                                </select>
                            </div>
                            <div class="form-grup">
                                <label for="status_hubungan">Status Hubungan</label>
                                <select name="status_hubungan" class="form-control" id="status_hubungan">
                                    <option value="lajang">Belum Menikah</option>
                                    <option value="menikah">Menikah</option>
                                    <option value="cerai">Cerai</option>
                                    <option value="janda/duda">Janda/Duda</option>
                                </select>
                            </div>
                            <div class="form-grup">
                                <label for="status_tinggal">Status Tinggal</label>
                                <select name="status_tinggal" class="form-control" id="status_tinggal">
                                    <option value="tetap">Tetap</option>
                                    <option value="pindahan">Pindahan</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end " style="gap:10px">
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
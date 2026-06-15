@extends('template')
@section('title', 'Detail Karyawan')
@section('konten')

    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <h1 class="display-5 fw-bold">Kode Soal mykaryawan</h1>
    </div>

    <h2 class="mb-4">Detail Data Karyawan</h2>

    <div class="card p-4">
        <div class="form-group row mb-3">
            <label class="col-sm-3 col-form-label font-weight-bold">Kode Pegawai</label>
            <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" value="{{ $karyawan->kodepegawai }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-sm-3 col-form-label font-weight-bold">Nama Lengkap</label>
            <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" value="{{ ucwords(strtolower($karyawan->namalengkap)) }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-sm-3 col-form-label font-weight-bold">Divisi</label>
            <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" value="{{ $karyawan->divisi }}">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label class="col-sm-3 col-form-label font-weight-bold">Departemen</label>
            <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" value="{{ $karyawan->departemen }}">
            </div>
        </div>

        <div class="form-group row mt-4">
            <div class="col-sm-9 offset-sm-3">
                <a href="/mykaryawan" class="btn btn-secondary">Kembali ke Halaman Index</a>
            </div>
        </div>
    </div>

@endsection

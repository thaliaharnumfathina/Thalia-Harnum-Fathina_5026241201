@extends('template')
@section('title', 'Daftar Karyawan')
@section('konten')


    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <h1 class="display-5 fw-bold">Kode Soal mykaryawan</h1>
    </div>

    <h2 class="mb-4">Daftar Seluruh Karyawan</h2>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Kode Pegawai (PK)</th>
                <th>Nma Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mykaryawan as $karyawan)
            <tr>
                <td>{{ $karyawan->kodepegawai }}</td>
                <td>{{ ucwords(strtolower($karyawan->namalengkap)) }}</td>
                <td>{{ $karyawan->divisi }}</td>
                <td>{{ $karyawan->departemen }}</td>
                <td>
                    <a href="/mykaryawan/{{ $karyawan->kodepegawai }}" class="btn btn-primary btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MykaryawanController extends Controller
{
    public function index()
    {
        $mykaryawan = DB::table('mykaryawan')->orderBy('kodepegawai')->get();
        return view('mykaryawan.index', compact('mykaryawan'));
    }

    public function show($kodepegawai)
    {
        $karyawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();

        if (!$karyawan) {
            abort(404);
        }

        return view('mykaryawan.view', compact('karyawan'));
    }
}

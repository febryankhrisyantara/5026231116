<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
        // mengambil data dari table
        $nilai= DB::table('nilai')->paginate(10);//get dan paginate tidak bisa dilakukan berbarengan

        // mengirim data truk ke view index
        return view('index_nilai',['nilai' => $nilai]);

    }

    public function tambah()
    {
        // memanggil view tambah
        return view('tambahNilai');

    }

    // method untuk insert data ke table karyawan
    public function store(Request $request)
    {

        DB::table('nilai')->insert([
            'id' => $request->id,
            'normorinduksiswa' => $request->normorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => strtolower($request->sks)
        ]);

        return redirect('/eas');
    }
}

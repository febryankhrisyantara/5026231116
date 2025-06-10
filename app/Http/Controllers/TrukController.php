<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrukController extends Controller
{
    public function home_truk()
    {
        // mengambil data dari table truk
        // $truk = DB::table('truk')->get(); //array all record
        $truk= DB::table('truk')->paginate(10);//get dan paginate tidak bisa dilakukan berbarengan

        // mengirim data truk ke view index
        return view('home_truk',['truk' => $truk]);

    }

     public function tambah()
    {
        // memanggil view tambah
        return view('tambahTruk');

    }

// method untuk insert data ke table truk
    public function store(Request $request)
    {
        // insert data ke table truk
        DB::table('truk')->insert([
            'merktruk' => $request->merk,
            'hargatruk' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman truk
        return redirect('/tugasCRUD')->with('success', 'Data truk berhasil ditambahkan!');
    }

    // method untuk edit data truk
    public function edit($id)
    {
        // mengambil data truk berdasarkan id yang dipilih
        $truk = DB::table('truk')
            ->where('id', $id)
            ->first();

        if (!$truk) {
            abort(404);
        }

        // passing data truk yang didapat ke view editTruk.blade.php
        return view('editTruk', ['truk' => $truk]);
    }

    // update data truk
    public function update(Request $request)
    {
        // update data truk
        DB::table('truk')->where('id',$request->id)->update([
            'merktruk' => $request->merk,
            'hargatruk' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman truk
        return redirect()->route('truk.index')->with('success', 'Data truk berhasil diperbarui!');
    }

    // method untuk hapus data truk
    public function hapus($id)
    {
        // menghapus data truk berdasarkan id yang dipilih
        DB::table('truk')->where('id',$id)->delete();

        // alihkan halaman ke halaman truk
        return redirect('/tugasCRUD')->with('success', 'Data truk berhasil dihapus!');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table truk sesuai pencarian data
		$truk = DB::table('truk')
		->where('merktruk','like',"%".$cari."%")
		->paginate(10)
        ->appends($request->all());

    		// mengirim data truk ke view index
		return view('home_truk',['truk' => $truk]);

	}

}

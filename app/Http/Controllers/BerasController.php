<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BerasController extends Controller
{
	public function index()
	{
    	// mengambil data dari table beras
		$beras = DB::table('beras')->paginate(10);

    	// mengirim data beras ke view index
		return view('index3',['beras' => $beras]);

	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table beras sesuai pencarian data
		$beras = DB::table('beras')
		            ->where('kodeberas','like',"%".$cari."%")
		            ->paginate();

    		// mengirim data beras ke view index
		return view('index3',['beras' => $beras]);

	}

	// method untuk insert data ke table beras
	public function store(Request $request)
	{
		// insert data ke table beras
		DB::table('beras')->insert([
			'kodeberas' => $request->kodeberas,
			'merkberas' => $request->merkberas,
			'stockberas' => $request->stockberas,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman beras
		return redirect('/beras');

	}

	// method untuk edit data beras
	public function edit($id)
    {
        // mengambil data beras berdasarkan id yang dipilih
        $beras = DB::table('beras')->where('kodeberas',$id)->get();
        // passing data beras yang didapat ke view edit.blade.php
        return view('edit3',['beras' => $beras]);
    }

	// update data beras
	public function update(Request $request)
	{
		// update data beras
		DB::table('beras')->where('kodeberas', $request->id)->update([
			'kodeberas' => $request->kodeberas,
			'merkberas' => $request->merkberas,
			'stockberas' => $request->stockberas,
			'tersedia' => $request->tersedia
		]);

		// alihkan halaman ke halaman beras
		return redirect('/beras');
	}

    // Method untuk menampilkan view form tambah beras
    public function tambah()
    {
        // Memanggil view tambah
        return view('tambah3');
    }

	// method untuk hapus data beras
	public function hapus($id)
	{
		// menghapus data beras berdasarkan id yang dipilih
		DB::table('beras')->where('kodeberas',$id)->delete();

		// alihkan halaman ke halaman beras
		return redirect('/beras');
	}

    public function view($id)
	{
		// mengambil data beras berdasarkan id yang dipilih
		$beras = DB::table('beras')->where('kodeberas',$id)->get();
		// passing data beras yang didapat ke view view.blade.php
		return view('view3',['beras' => $beras]);
	}
}

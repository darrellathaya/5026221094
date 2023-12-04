<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$nilaikuliah = DB::table('nilaikuliah')-> get();

    	// mengirim data pegawai ke view index
		return view('index2',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
            'NilaiAngka' => $request->NilaiAngka,
			'NRP' => $request->NRP,
			'SKS' => $request->SKS,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}

    // Method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // Memanggil view tambah
        return view('tambah2');
    }
}


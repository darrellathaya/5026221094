<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
	public function index()
	{
    	// mengambil data dari table kategori
		$kategori = DB::table('kategori')->paginate(10);

    	// mengirim data kategori ke view index
		return view('index4',['kategori' => $kategori]);

	}

	// method untuk insert data ke table kategori
	public function store(Request $request)
	{
		// insert data ke table kategori
		DB::table('kategori')->insert([
			'ID' => $request->ID,
			'Nama' => $request->Nama
		]);
		// alihkan halaman ke halaman kategori
		return redirect('/combo');

	}

    // Method untuk menampilkan view form tambah kategori
    public function tambah()
    {
        // Memanggil view tambah
        return view('tambah4');
    }

    public function view($id)
	{
		// mengambil data kategori berdasarkan id yang dipilih
		$kategori = DB::table('kategori')->where('ID',$id)->get();
		// passing data kategori yang didapat ke view view.blade.php
		return view('view4',['kategori' => $kategori]);
	}
}

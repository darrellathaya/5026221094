<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $a = 3;
        $b = 7;
        $c = $a * $b;
        return "<h1>Hasil Perkalian = " . (string)$c . "</h1>";
    }

    public function showBlog()
    {
        $nama = "Dinda";
        $alamat = "Tuban";
        $umur = 18;
        return view('blog', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }

    public function showNama($nama)
    {
        return "Anda telah mengisikan : ". $nama; //$nama itu sama dengan (nama) yang ada di web.php
    }

    public function formulir(){
    	return view('formulir');
    }

     public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}

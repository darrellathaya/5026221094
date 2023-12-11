@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Kategori</h3>
    <a href="/combo" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>
    @foreach($kategori as $k)
    <div class="container card p-4">
        <h3>Anda telah memilih Kategori {{ $k -> Nama }} dengan Kode: {{ $k -> ID }}</h3>
    </div>
    @endforeach
@endsection

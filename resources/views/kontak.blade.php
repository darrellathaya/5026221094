<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<p>Ini Adalah Halaman Kontak</p>

    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br/>
	<br/>

	<table class = "table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>Darrell Athaya Refaldi</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60111</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>malasngoding@gmail.com</td>
		</tr>
		<tr>
			<td>Hp</td>
			<td>:</td>
			<td>0896-0676-7404</td>
		</tr>

        @for ($i=1; $i<5; $i++)
        <tr>
            <td>No</td>
            <td>:</td>
            <td>{{ $i }}</td>
        </tr>
        @endfor

        @foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach

	</table>

@endsection

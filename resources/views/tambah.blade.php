@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

    <form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-6">
                <input name="pegawai_nama" type="text" class="form-control" placeholder="Masukkan Nama" required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Jabatan</label>
            <div class="col-6">
                <input name="pegawai_jabatan" type="text" class="form-control" placeholder="Masukkan Jabatan" required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Umur</label>
            <div class="col-6">
                <input name="pegawai_umur" type="number" class="form-control" placeholder="Masukkan Umur" required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-6">
                <input name="pegawai_alamat" type="text" class="form-control" placeholder="Masukkan Alamat" required="required">
            </div>
        </div>

		<input type="submit" class='btn btn-success' value="Tambah Data">
	</form>
@endsection

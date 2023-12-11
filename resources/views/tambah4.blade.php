@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Kategori</h3>

	<a href="/combo" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

    <form action="/combo/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Nama">Pilih Kategori</label>
                <select class="form-control" name="Nama" required="required">
                    <option value="Elektronik">Elektronik</option>
                    <option value="Rumah Tangga">Rumah Tangga</option>
                    <option value="Komputer">Komputer</option>
                </select>
            </div>

		<input type="submit" class='btn btn-success' value="Tambah Data">
	</form>
@endsection

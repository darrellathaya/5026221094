@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<br/>
	<br/>
    <div class="container card p-4">
        <div class="row">
            <div class="col-sm-6">
            <div class="card" style="height: 7cm;">
                <div class="card-body">
                </div>
            </div>
            </div>

            @foreach($pegawai as $p)
            <div class="col-sm-6">
                <table class = "table table-borderless table-hover">
                    <tr>
                        <th> Nama
                            <td> {{ $p -> pegawai_nama }} </td>
                        </th>
                    </tr><tr>
                        <th> Jabatan
                            <td> {{ $p -> pegawai_jabatan }} </td>
                        </th>
                    </tr><tr>
                        <th> Umur
                            <td> {{ $p -> pegawai_umur }} </td>
                        </th>
                    </tr><tr>
                        <th> Alamat
                            <td> {{ $p -> pegawai_alamat }} </td>
                        </th>
                    </tr>
                    @endforeach
                </table>
                <div class="text-center">
                    <a href="/pegawai" class = "btn btn-success w-25 p-2"> OK</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Beras</h3>

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

            @foreach($beras as $p)
            <div class="col-sm-6">
                <table class = "table table-borderless table-hover">
                    <tr>
                        <th> Kode Beras
                            <td> {{ $p -> kodeberas }} </td>
                        </th>
                    </tr><tr>
                        <th> Merk Beras
                            <td> {{ $p -> merkberas }} </td>
                        </th>
                    </tr><tr>
                        <th> Stock Beras
                            <td> {{ $p -> stockberas }} </td>
                        </th>
                    </tr><tr>
                        <th> Ketersediaan
                            <td> {{ $p -> tersedia }} </td>
                        </th>
                    </tr>
                    @endforeach
                </table>
                <div class="text-center">
                    <a href="/beras" class = "btn btn-success w-25 p-2"> OK</a>
                </div>
            </div>
        </div>
    </div>
@endsection

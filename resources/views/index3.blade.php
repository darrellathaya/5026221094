@extends('master2')
@section('title', "Data Beras")

@section('judul_halaman')
    <h2>
        <a href = "https://www.malasngoding.com"> www.malasngoding.com </a>
    </h2>

    <h3>
        Data Beras
    </h3>

    <a href = "/beras/tambah"> + Tambah Data Beras Baru</a>

    <br/>
    <br/>
@endsection

@section('konten')

    <p> Cari Data Beras: </p>

    <form action = "/beras/cari" method = "GET">
        <div class = "input-group">
            <input class = "form-control" type = "text" name = "cari" placeholder = "Cari beras berdasarkan nama" value = "{{ old('cari') }}">
            <input type = "submit px-1" value = "CARI" class = "btn btn-primary">
        </div>
    </form>
    <br/>

    <table class = "table table-striped table-hover">
        <tr>
            <th> Kode Beras </th>
            <th> Merk Beras </th>
            <th> Stock Beras </th>
            <th> Tersedia </th>
            <th> Opsi </th>
        </tr>

        @foreach($beras as $p)
        <tr>
            <td> {{ $p -> kodeberas }} </td>
            <td> {{ $p -> merkberas }} </td>
            <td> {{ $p -> stockberas }} </td>
            <td> {{ $p -> tersedia }} </td>

            <td>
                <a href = "/beras/view/{{ $p -> kodeberas }}" class = "btn btn-success"> View </a>
                <a href = "/beras/edit/{{ $p -> kodeberas }}" class = "btn btn-warning"> Edit </a>
                <a href = "/beras/hapus/{{ $p -> kodeberas }}" class = "btn btn-danger"> Hapus </a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $beras -> links() }}
@endsection

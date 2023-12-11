@extends('master2')
@section('title', "Kategori")

@section('judul_halaman')
    <h2>
        <a href = "https://www.malasngoding.com"> www.malasngoding.com </a>
    </h2>

    <h3>
        Kategori
    </h3>

    <a href = "/combo/tambah"> + Tambah Kategori Baru</a>

    <br/>
    <br/>
@endsection

@section('konten')

    <p> Cari Kategori: </p>

    <table class = "table table-striped table-hover">
        <tr>
            <th> ID </th>
            <th> Nama </th>
            <th> Lihat Kategori </th>
        </tr>

        @foreach($kategori as $k)
        <tr>
            <td> {{ $k -> ID }} </td>
            <td> {{ $k -> Nama }} </td>

            <td>
                <a href = "/combo/view/{{ $k -> ID }}" class = "btn btn-success"> View </a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $kategori -> links() }}
@endsection

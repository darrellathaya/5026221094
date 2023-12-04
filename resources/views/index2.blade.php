@extends('master2')
@section('title', "Nilai Kuliah")

@section('judul_halaman')
    <h2>
        <a href = "https://www.malasngoding.com"> www.malasngoding.com </a>
    </h2>

    <h3>
        Nilai Kuliah
    </h3>

    <a href = "/nilaikuliah/tambah"> + Tambah Nilai Kuliah Baru</a>

    <br/>
    <br/>
@endsection

@section('konten')
    @php
        function angkaToHuruf($nilai){
            if ($nilai >= 81 && $nilai <= 100) {
                return 'A';
            } elseif ($nilai >= 61 && $nilai <= 80) {
                return 'B';
            } elseif ($nilai >= 41 && $nilai <= 60) {
                return 'C';
            } elseif ($nilai >= 0 && $nilai <= 40) {
                return 'D';
            } else {
                return 'Nilai tidak valid';
            }
        }
    @endphp

    <table class = "table table-striped table-hover">
        <tr>
            <th> ID </th>
            <th> NRP </th>
            <th> Nilai Angka </th>
            <th> SKS </th>
            <th> Nilai Huruf </th>
            <th> Bobot </th>
        </tr>

        <?php
        $title = "How to Write PHP Code in Laravel Blade? - ItSolutionStuff.com";
        $myArray = ['id'=>1,'name'=>'Hardik'];
        ?>

        @foreach($nilaikuliah as $p)
        <tr>
            <td> {{ $p -> ID }} </td>
            <td> {{ $p -> NRP }} </td>
            <td> {{ $p -> NilaiAngka }} </td>
            <td> {{ $p -> SKS }} </td>
            <td>{{angkaToHuruf($p->NilaiAngka) }}</td>
            <td>{{$p->NilaiAngka * $p->SKS }}</td>
        </tr>
        @endforeach
    </table>
@endsection

@extends('master2')

@section('konten')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>
        Edit beras
    </h3>

    <a href="/beras" class="btn btn-primary"> Kembali</a>

    @foreach($beras as $p)
    <form action = "/beras/update" method = "post">
        {{-- {{ csrf_field() }} --}}
        <input type = "hidden" name = "id" value = "{{ $p -> kodeberas }}"> <br/>
            {{-- <div class="container">
                <form>
                <!-- Row 1 -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>Nama</label>
                      <input type="text" class="form-control" placeholder="Masukkan Nama" value = "{{ $p->pegawai_nama }}"> <br/>
                    </div>

                    <div class="form-group col-md-6">
                      <label>Jabatan</label>
                      <input type="text" class="form-control"  placeholder="Masukkan Jabatan" value = "{{ $p->pegawai_jabatan }}"> <br/>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Umur</label>
                        <input type="number" class="form-control" placeholder="Masukkan Umur" value = "{{ $p->pegawai_umur }}"> <br/>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Alamat</label>
                        <textarea class="form-control" placeholder="Masukkan Alamat">{{ $p->pegawai_alamat }}</textarea>
                    </div>
                </div> --}}


            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-sm-2 control-label">Kode Beras</label>
                <div class="col-6">
                    <input name="kodeberas" type="number" class="form-control" placeholder="Masukkan kode beras" required="required" value = "{{ $p->kodeberas }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Merk Beras</label>
                <div class="col-6">
                    <input name="merkberas" type="text" class="form-control" placeholder="Masukkan merk beras" required="required" value = "{{ $p->merkberas }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Stok Beras</label>
                <div class="col-6">
                    <input name="stockberas" type="number" class="form-control" placeholder="Masukkan stok beras" required="required" value = "{{ $p->stockberas }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Ketersediaan</label>
                <div class="col-6">
                    <input name="tersedia" type="text" class="form-control" placeholder="Masukkan ketersediaan beras" required="required" value = "{{ $p->tersedia }}">
                </div>
            </div>
            <input type="submit" class='btn btn-success' value="Submit">
            </form>
    </form>
@endforeach
@endsection

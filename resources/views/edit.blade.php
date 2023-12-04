@extends('master2')

@section('konten')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>
        Edit Pegawai
    </h3>

    <a href="/pegawai" class="btn btn-primary"> Kembali</a>

    @foreach($pegawai as $p)
    <form action = "/pegawai/update" method = "post">
        {{-- {{ csrf_field() }} --}}
        <input type = "hidden" name = "id" value = "{{ $p -> pegawai_id }}"> <br/>
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
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-6">
                    <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama" required="required" value = "{{ $p->pegawai_nama }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Jabatan</label>
                <div class="col-6">
                    <input name="jabatan" type="text" class="form-control" placeholder="Masukkan Jabatan" required="required" value = "{{ $p->pegawai_jabatan }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Umur</label>
                <div class="col-6">
                    <input name="umur" type="number" class="form-control" placeholder="Masukkan Umur" required="required" value = "{{ $p->pegawai_umur }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Alamat</label>
                <div class="col-6">
                    <input name="alamat" type="text" class="form-control" placeholder="Masukkan Alamat" required="required" value = "{{ $p->pegawai_alamat }}">
                </div>
            </div>
            <input type="submit" class='btn btn-success' value="Submit">
            </form>
    </form>
@endforeach
@endsection

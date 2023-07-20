@extends('partial.layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div>
              <a href="{{route('penghuni_kos.index') }}" class="btn btn-primary mb-3">Kembali</a>
        </div>
            <h4 class="card-title">Form Tambah data Penghuni Kos</h4>
            <form class="forms-sample" method="POST" action="{{route('penghuni_kos.store')}}">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Nama Penghuni</label>
                <input type="text" class="form-control" id="exampleInputName1" name="nama_penghuni" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail3" name="email_penghuni" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputNotlpn4">No Wa</label>
                <input type="nowa" class="form-control" id="exampleInputNoWa" name="no_wa" placeholder="No wa">
              </div>
              <div class="form-group">
                <label for="exampleInputNotlpn4">No telp</label>
                <input type="notlpn" class="form-control" id="exampleInputNotlpn" name="no_telp" placeholder="No telp">
              </div>
              <div class="form-group">
                <label for="exampleInputNotlpn4">Pekerjaan</label>
                <input type="pekerjaan" class="form-control" id="exampleInputPekerjaan" name="pekerjaan" placeholder="pekerjaan">
              </div>
              <div class="form-group">
                <label for="exampleInputNotlpn4">NIK</label>
                <input type="nik" class="form-control" id="exampleInputNik" name="nik" placeholder="nik">
              </div>
              <div class="form-group">
                <label for="exampleInputNotlpn4">KTP</label>
                <input type="ktp" class="form-control" id="exampleInputKtp" name="ktp" placeholder="ktp">
              </div>
              <div class="form-group">
                <label>Foto Profile</label>
                {{-- <input type="file" name="img[]" class="file-upload-default"> --}}
                <div class="input-group col-xs-12">
                  <input type="file" name="foto_profile" class="form-control file-upload-info"  placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                  </span>
                </div>
              </div>
              
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
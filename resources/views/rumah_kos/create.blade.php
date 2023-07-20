@extends('partial.layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div>
              <a href="{{route('rumah_kos.index') }}" class="btn btn-primary mb-3">Kembali</a>
        </div>
            <h4 class="card-title">Form Tambah data Rumah Kos</h4>
            <form class="forms-sample" method="POST" action="{{route('rumah_kos.store')}}">
              @csrf
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputName1">Nama Rumah Kos</label>
                <input type="text" class="form-control" id="exampleInputName1" name="nama_rumah_kos" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Deskripsi</label>
                <input type="" class="form-control" id="exampleInputEmail3" name="deskripsi_rumah_kos" placeholder="Deskripsi">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Jenis Kos</label>
                <input type="" class="form-control" id="exampleInputPassword4" name="jenis_rumah_kos" placeholder="Jenis Kos">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Fasilitas</label>
                <input type="" class="form-control" id="exampleInputPassword4" name="fasilitas" placeholder="Fasilitas">
              </div>
              
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
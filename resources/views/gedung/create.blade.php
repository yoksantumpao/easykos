@extends('partial.layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div>
              <a href="{{route('gedung.index') }}" class="btn btn-primary mb-3">Kembali</a>
        </div>
            <h4 class="card-title">Form Tambah data Gedung </h4>
            <form class="forms-sample" method="POST" action="{{route('gedung.store')}}">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Nama Gedung</label>
                <input type="gedung" class="form-control" id="exampleInputgedung" name="nama_gedung" placeholder="Gedung">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Deskripsi</label>
                <input type="deskripsigedung" class="form-control" id="exampleInputdeskripsigedung" name="deskripsi_gedung" placeholder="Deskripsi">
              </div>
              
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
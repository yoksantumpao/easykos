@extends('partial.layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div>
              <a href="{{route('foto_kos.index') }}" class="btn btn-primary mb-3">Kembali</a>
        </div>
            <h4 class="card-title">Form Tambah data Foto Kos</h4>
            <form class="forms-sample" method="POST" action="{{route('foto_kos.store')}}">
              @csrf
              <div class="form-group">
                <label for="exampleInputNamaFoto">Nama Foto</label>
                <input type="namafoto" class="form-control" id="exampleInputNamaFoto" name="nama_foto" placeholder="Nama">
              </div>
              
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
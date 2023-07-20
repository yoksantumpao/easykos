@extends('partial.layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div>
              <a href="{{route('pencari_kos.index') }}" class="btn btn-primary mb-3">Kembali</a>
        </div>
            <h2 class="card-title">Form Tambah data Pencari Kos</h2>
            <form class="forms-sample" method="POST" action="{{route('pencari_kos.store')}}">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Nama</label>
                <input type="text" class="form-control" id="exampleInputName1" name="nama" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputNotlpn4">No Telp</label>
                <input type="Notelpn" class="form-control" id="exampleInputNotlpn4" name="no_telp" placeholder="No Telp">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="Password" class="form-control" id="exampleInputPassword" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
@extends('partial.layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div>
              <a href="{{route('pencari_kos.index') }}" class="btn btn-primary mb-3">Kembali</a> 
        </div>
            <h2 class="card-title">Form Edit Data Pencari Kos</h2>
            <form action="{{ route('pencari_kos.update',$pencari_kos->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="form-group">
                <label for="exampleInputName1">Nama</label>
                <input type="text" class="form-control" id="exampleInputName1" name="nama" placeholder="Nama" value="{{ old('nama',$pencari_kos->nama) }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email" value="{{ old('email',$pencari_kos->email) }}">
              </div>
              <div class="form-group">
                <label for="exampleInputNotlpn4">No Telp</label>
                <input type="Notelpn" class="form-control" id="exampleInputNotlpn4" name="no_telp" placeholder="No Telp" value="{{ old('no_telp',$pencari_kos->no_telp) }}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="Password" class="form-control" id="exampleInputPassword" name="password" placeholder="Password" value="{{ old('password',$pencari_kos->password) }}">
              </div>
              <button type="submit" class="btn btn-success mr-3">Simpan</button>
              
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
@extends('partial.layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div>
              <a href="{{route('pemilik_kos.index') }}" class="btn btn-primary mb-3">Kembali</a>
        </div>
            <h2 class="card-title">Form Tambah data Pemilik Kos</h2>
            <form class="forms-sample" method="POST" action="{{route('pemilik_kos.store')}}">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Nama Pemilik</label>
                <input type="text" class="form-control" id="exampleInputName1" name="nama_pemilik" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail3" name="email_pemilik" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputNotlpn4">No Telp</label>
                <input type="Notelpn" class="form-control" id="exampleInputNotlpn4" name="no_telp" placeholder="No Telp">
              </div>
              <div class="form-group">
                <label for="exampleInputNotlpn4">Nama Bank</label>
                <input type="Namabank" class="form-control" id="exampleInputNamabank5" name="nama_bank" placeholder="Bank">
              </div>
              <div class="form-group">
                <label for="exampleInputNotlpn4">No Rekening</label>
                <input type="Norekening" class="form-control" id="exampleInputNorekening6" name="no_rekening" placeholder="Rekening">
              </div>
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
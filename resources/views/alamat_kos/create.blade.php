@extends('partial.layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div>
              <a href="{{route('alamat_kos.index') }}" class="btn btn-primary mb-3">Kembali</a>
        </div>
            <h4 class="card-title">Form Tambah data Alamat Kos </h4>
            <form class="forms-sample" method="POST" action="{{route('alamat_kos.store')}}">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail3">Provinsi</label>
                <input type="provinsi" class="form-control" id="exampleInputEmail3" name="provinsi" placeholder="Provinsi">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Kecamatan</label>
                <input type="kecamatan" class="form-control" id="exampleInputPassword4" name="kecamatan" placeholder="Kecamatan">
              </div>
              <div class="form-group">
                <label for="exampleInputKabupatenKota">Kabupaten/ Kota</label>
                <input type="kabupatenkota" class="form-control" id="exampleInputKabupatenKota" name="kabupaten_kota" placeholder="Kabupaten">
              </div>
              <div class="form-group">
                <label for="exampleInputKodePos">Kode Pos</label>
                <input type="kodepos" class="form-control" id="exampleInputKodePos" name="kode_pos" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputJlnGang">Jln/ gang</label>
                <input type="jlngang" class="form-control" id="exampleInputJlnGang" name="jln_gang" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputLatLong">Lokasi</label>
                <input type="latlong" class="form-control" id="exampleInputLatLong" name="lat_long" placeholder="">
              </div>
              
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
@extends('partial.layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div>
              <a href="{{route('kamar_kos.index') }}" class="btn btn-primary mb-3">Kembali</a>
        </div>
            <h4 class="card-title">Form Tambah data Kamar Kos</h4>
            <form class="forms-sample" method="POST" action="{{route('kamar_kos.store')}}">
              @csrf
              <div class="form-group">
                <label for="exampleInputNoKamar">No Kamar</label>
                <input type="nokamar" class="form-control" id="exampleInputNoKamar" name="nomor_kamar" placeholder="No Kamar">
              </div>
              <div class="form-group">
                <label for="exampleInputJenisKamar">Jenis Kamar</label>
                <input type="jeniskamar" class="form-control" id="exampleInputJenisKamar" name="jenis_kamar" placeholder="Jenis Kamar">
              </div>
              <div class="form-group">
                <label for="exampleInputHargaKamar">Harga</label>
                <input type="hargakamar" class="form-control" id="exampleInputHargaKamar" name="harga_kamar" placeholder="Rp,-">
              </div>
              <div class="form-group">
                <label for="exampleInputUkuranKamar">Ukuran Kamar</label>
                <input type="ukurankamar" class="form-control" id="exampleInputUkuranKamar" name="ukuran_kamar" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputJumlahKamar">Jumlah Kamar</label>
                <input type="jumlahkamar" class="form-control" id="exampleInputJumlahKamar" name="jumlah_kamar" placeholder="Jumlah Kamar">
              </div>
              <div class="form-group">
                <label for="exampleInputFasilitaskamar">Fasilitas Kamar</label>
                <input type="fasilitaskamar" class="form-control" id="exampleInputfasilitasKamar" name="fasilitas_kamar" placeholder="-">
              </div>
              <div class="form-group">
                <label>Foto Kamar</label>
                {{--<input type="file" name="img[]" class="file-upload-default">--}}           
              <div class="input-group col-xs-12">
                <input type="file" name="foto_kamar" class="form-control file-upload-info"  placeholder="Upload Image">
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
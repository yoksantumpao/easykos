@extends('partial.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tabel Data Kamar Kos
                <a href="{{route('kamar_kos.create')}}" class="btn btn-primary btn-fw">Tambah data</a>
                </h4>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> No </th>
                      <th> Jumlah Kamar </th>
                      <th> Jenis Kamar </th>
                      <th> Ukuran Kamar </th>
                      <th> Foto Kamar </th>
                      <th> No Kamar </th>
                      <th> Harga Kamar </th>
                      <th> Fasilitas Kamar </th>
                    </tr>
                  </thead>
                  <tbody>
                      @php
                          $no = 0;
                      @endphp
                      @forelse ($data as $item)
                      <tr>
                          <td class="py-1">
                            {{$no+=1}}
                          </td>
                          
                          <td> {{$item->jenis_kamar}}</td>
                          <td> {{$item->ukuran_kamar}}</td>
                          <td> {{$item->jumlah_kamar}}</td>
                          <td> {{$item->foto_kamar}}</td>
                          <td> {{$item->nomor_kamar}}</td>
                          <td> {{$item->harga_kamar}}</td>
                          <td> {{$item->fasilitas_kamar}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Data tidak ada</td>
                        </tr>
                        @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
@endsection
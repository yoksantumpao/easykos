@extends('partial.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tabel Data Alamat Kos
                  <a href="{{route('alamat_kos.create')}}" class="btn btn-primary btn-fw">Tambah Data</a>
                </h4>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> No </th>
                      <th> Provinsi </th>
                      <th> Kabupaten/Kota </th>
                      <th> Kecamatan </th>
                      <th> Kode Pos </th>
                      <th> Jln/Gang </th>
                      <th> Lokasi </th>
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
                          <td> {{$item->provinsi}} </td>
                          <td> {{$item->kabupaten_kota}}</td>
                          <td>{{$item->kecamatan}}</td>
                          <td> {{$item->kode_pos}}</td>
                          <td> {{$item->jln_gang}}</td>
                          <td> {{$item->lat_long}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">Data tidak ada</td>
                        </tr>
                        @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
@endsection
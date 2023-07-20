@extends('partial.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tabel Data Rumah Kos
                <a href="{{route('rumah_kos.create')}}" class="btn btn-primary btn-fw">Tambah data</a>
                </h4>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> No </th>
                      <th> Nama Rumah Kos </th>
                      <th> Deskripsi </th>
                      <th> Jenis </th>
                      <th> Fasilitas </th>
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
                          <td> {{$item->nama_rumah_kos}} </td>
                          <td> {{$item->deskripsi_rumah_kos}} </td>
                          <td> {{$item->jenis_rumah_kos}} </td>
                          <td>{{$item->fasilitas}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">Data tidak ada</td>
                        </tr>
                        @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
@endsection
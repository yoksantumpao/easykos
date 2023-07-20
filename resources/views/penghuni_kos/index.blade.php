@extends('partial.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tabel Data Penghuni Kos
                <a href="{{route('penghuni_kos.create')}}" class="btn btn-primary btn-fw">Tambah Data</a>
                </h4>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> No </th>
                      <th> Nama Penghuni </th>
                      <th> Email Penghuni </th>
                      <th> Nomor Tlp </th>
                      <th> No Wa </th>
                      <th> No Telp </th>
                      <th> Pekerjaan </th>
                      <th> NIK </th>
                      <th> KTP </th>
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
                          <td> {{$item->nama_penghuni}} </td>
                          <td>{{$item->email_penghuni}}</td>
                          <td> {{$item->no_telp}}</td>
                          <td> {{$item->no_wa}}</td>
                          <td> {{$item->no_telp}}</td>
                          <td> {{$item->pekerjaan}}</td>
                          <td> {{$item->nik}}</td>
                          <td> {{$item->ktp}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9">Data tidak ada</td>
                        </tr>
                        @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
@endsection
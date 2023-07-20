@extends('partial.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tabel Data Pemilik Kos 
                <a href="{{route('pemilik_kos.create')}}" class="btn btn-primary btn-fw">Tambah data</a>
                </h4>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> No </th>
                      <th> Nama Pemilik </th>
                      <th> Email Pemilik </th>
                      <th> Nomor Tlp </th>
                      <th> Nama Bank </th>
                      <th> No Rekening </th>
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
                          <td> {{$item->nama_pemilik}} </td>
                          <td>
                            {{$item->email_pemilik}}
                          </td>
                          <td> {{$item->no_telp}}</td>
                          <td> {{$item->nama_bank}}</td>
                          <td> {{$item->no_rekening}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">Data tidak ada</td>
                        </tr>
                        @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
@endsection
@extends('partial.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tabel Data Foto Kos
                  <a href="{{route('foto_kos.create')}}" class="btn btn-primary btn-fw">Tambah Data</a>
                </h4>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> No </th>
                      <th> Nama Foto </th>
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
                          <td> {{$item->nama_foto}} </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2">Data tidak ada</td>
                        </tr>
                        @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
@endsection
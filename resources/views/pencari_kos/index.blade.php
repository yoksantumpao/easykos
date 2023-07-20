@extends('partial.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tabel Data Pencari Kos
                <a href="{{route('pencari_kos.create')}}" class="btn btn-primary btn-fw">Tambah Data</a>
                </h4>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> No </th>
                      <th> Nama </th>
                      <th> Email </th>
                      <th> Nomor Telp </th>
                      <th> Password </th>
                      <th> Action </th>
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
                          

                          <td> {{$item->nama}} </td>
                          <td>{{$item->email}}</td>
                          <td> {{$item->no_telp}}</td>
                          <td> {{$item->password}}</td>
                          <td>
                            
                            {{-- <a href="#" onclick="deletePencari_kos({{ $pencari_kos->id }})" class="btn btn-danger btn-sm">Delete</a> --}}
                            
                            <form id="pencari_kos-edit-action-" action="{{ route('pencari_kos.destroy',$item->id) }}" method="post">
                              @csrf
                              @method('delete')
                              <a href="{{ route('pencari_kos.show',$item->id)}}" class="btn btn-info btn-sm">View</a>
                              <a href="{{ route('pencari_kos.edit',$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                              <button type="submit"  class="btn btn-danger btn-sm">Delete</a>

                          </form>
                        </td>
                          
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">Data tidak ada</td>
                        </tr>
                        @endforelse
                        

                        </div>
                      </div>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
    

@endsection
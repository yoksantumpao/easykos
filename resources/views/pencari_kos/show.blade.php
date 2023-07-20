@extends('partial.layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Pencari Kos</h4>
            <div>
              <a href="{{route('pencari_kos.index') }}" class="btn btn-primary mb-3">Kembali</a> 
        </div>
            <form class="card-description" method="POST" action="{{route('pencari_kos.create')}}">
              @csrf
              <tbody>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No_telp</th>
                      <th>Password</th>
                    </tr>
                  </thead>
              <table class="table">
                <td> @class(['p-4', 'font-bold' => true])</td>
                <td> @class(['p-4', 'font-bold' => true])</td>
                <td> @class(['p-4', 'font-bold' => true])</td>
                <td> @class(['p-4', 'font-bold' => true])</td>
                <td>
                  
              </table>
              </tbody>
              
            </form>
          </div>
        </div>  
      </div>
</div>
@endsection
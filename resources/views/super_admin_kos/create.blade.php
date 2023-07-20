@extends('partial.layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div>
              <a href="{{route('super_admin_kos.index') }}" class="btn btn-primary mb-3">Kembali</a>
        </div>
            <h2 class="card-title">Form Tambah data Super Admin Kos</h2>
            <form class="forms-sample" method="POST" action="{{route('super_admin_kos.store')}}">
              @csrf
              <div class="form-group">
                <label for="exampleInputUsername">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword" name="password" placeholder="Password">
              </div>
              
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
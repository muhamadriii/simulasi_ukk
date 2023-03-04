@extends('layout.app')

@section('content')
<div class=" text-right mr-5 ">
  <a href="{{ route($route.'.index')}}" class="btn btn-primary">Back</a>
</div>

<form action="{{ route($route.'.store')}}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate="">
<div class="card-body">
  @csrf
  
  <div class="form-group">
    <label>Name</label>
    <input name="name" type="text" class="form-control" required="">
    <div class="invalid-feedback">
      Oh no! name is invalid.
    </div>
  </div>
  
  <div class="form-group">
    <label>Username</label>
    <input name="username" type="text" class="form-control" required="">
    <div class="invalid-feedback">
      Oh no! username is invalid.
    </div>
  </div>
  
  <div class="form-group">
    <label>password</label>
    <input name="password" type="password" class="form-control" required="">
    <div class="invalid-feedback">
      Oh no! password is invalid.
    </div>
  </div>
  
  <div class="form-group">
    <label>Telphone</label>
    <input name="telp" type="number" class="form-control" required="">
    <div class="invalid-feedback">
      Oh no! telp is invalid.
    </div>
  </div>

  <div class="form-group">
    <label>Level</label>
    <select name="level" class="form-control" required>
        <option value="" selected disabled>--Choose--</option>
        <option value="admin">admin</option>
        <option value="petugas">petugas</option>
    </select>
    <div class="invalid-feedback">
        Kelas is Required
    </div>
  </div>

</div>
  <div class="card-footer text-right">
    <button class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection
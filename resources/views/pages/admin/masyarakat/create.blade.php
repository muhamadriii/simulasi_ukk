@extends('layout.app')

@section('content')
<div class=" text-right mr-5 ">
  <a href="{{ route($route.'.index')}}" class="btn btn-primary">Back</a>
</div>

<form action="{{ route($route.'.store')}}" method="POST" class="needs-validation" novalidate="">
  <div class="card-body">
    @csrf
    
    <div class="form-group">
      <label>nik</label>
      <input name="nik" type="number" class="form-control" required="">
      <div class="invalid-feedback">
          nik is Invalid!
      </div>
    </div>
    
    <div class="form-group">
      <label>Name</label>
      <input name="name" type="text" class="form-control" required="">
      <div class="invalid-feedback">
          Name is Invalid!
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

  </div>
  <div class="card-footer text-right">
    <button class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection
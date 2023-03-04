@extends('layout.app')

@section('content')
<div class=" text-right mr-5 ">
  <a href="{{ route($route.'.index')}}" class="btn btn-primary">Back</a>
</div>

<form action="{{ route($route.'.store')}}" method="POST" class="needs-validation" novalidate="">
<div class="card-body">
  @csrf
  
  <div class="form-group">
    <label>Userame</label>
    <input name="username" type="text" class="form-control @error('teacher_id') is-invalid @enderror" required="">
    @error('username')       
    <div class="invalid-feedback">
      {{ $message }}
      a
    </div>
    @enderror
  </div>
  
  <div class="form-group">
    <label>password</label>
    <input name="password" type="text" class="form-control" required="">
    <div class="invalid-feedback">
      Oh no! Password is invalid.
    </div>
  </div>
  
  <div class="form-group">
    <label>Role</label>
    <select name="role" class="form-control" required>
        <option selected disabled>--Choose--</option>
        <option value="guru">guru</option>
        <option value="admin">admin</option>
    </select>
    <div class="invalid-feedback">
        Role is Required
    </div>
  </div>

</div>
  <div class="card-footer text-right">
    <button class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection
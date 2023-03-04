@extends('layout.app')

@section('content')
<div class=" text-right mr-5 ">
  <a href="{{ route($route.'.index')}}" class="btn btn-primary">Back</a>
</div>
<form action="{{ route($route.'.update',$data->id) }}" method="POST" class="needs-validation" novalidate="">
  <div class="card-body">
    @csrf
    @method('PUT')
    
    <div class="form-group">
      <label>Username</label>
      <input name="username" type="text" value="{{ $data->username}}" class="form-control  @error('username') is-invalid @enderror" required="">
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    
    <div class="form-group">
      <label>New Password</label>
      <input name="password" type="password" value="" class="form-control">
      <div class="invalid-feedback">
        Oh no! Nis is invalid.
      </div>
    </div>
    
    <div class="form-group">
      <label>Role</label>
      <select name="role" class="form-control" required>
          <option selected disabled>--Choose--</option>
          <option value="guru"
          @if ('guru' == $data->role)
              selected
          @endif
          >guru</option>
          <option value="admin"
          @if ('admin' == $data->role)
              selected
          @endif
          >admin</option>
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
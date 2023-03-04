@extends('layout.app')

@section('content')
<div class=" text-right mr-5 ">
  <a href="{{ route($route.'.index')}}" class="btn btn-primary">Back</a>
</div>

<form action="{{ route($route.'.store')}}" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
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
      <label>Foto</label>
      <input name="foto" type="file" class="form-control" required="">
      <div class="invalid-feedback">
        Oh no! foto is invalid.
      </div>
    </div>
    
    <div class="form-group">
      <label>Laporan</label> 
      <textarea name="isi" class="form-control" style="height:150px;" required=""></textarea>
      <div class="invalid-feedback">
        Oh no! laporan is invalid.
      </div>
    </div>

  </div>
  <div class="card-footer text-right">
    <button class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection
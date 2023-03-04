@extends('layout.app')

@section('content')
<div class=" text-right mr-5 ">
  <a href="{{ route($route.'.index')}}" class="btn btn-primary">Back</a>
</div>
<form action="{{ route($route.'.update',$data->id) }}" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
  <div class="card-body">
    @csrf
    @method('put')
    <div class="form-group">
      <label>nik</label>
      <input name="nik" type="number" class="form-control" required="" value="{{$data->nik}}">
      <div class="invalid-feedback">
          nik is Invalid!
      </div>
    </div>
    
    <div class="form-group">
      <label>Foto</label>
      <input name="foto" type="file" class="form-control" required="" value="{{ $data->foto }}">
      <div class="invalid-feedback">
        Oh no! foto is invalid.
      </div>
    </div>
    
    <div class="form-group">
      <label>Laporan</label> 
      <textarea name="isi" class="form-control" style="height:150px;" required="" >{{$data->isi}}</textarea>
      <div class="invalid-feedback">
        Oh no! laporan is invalid
      </div>
    </div>
  
  </div>

  <div class="card-footer text-right">
    <button class="btn btn-primary">Submit</button>
  </div>
</form>
<hr style="border: 3px dashed grey">
<div class="card-header">
  <h4>Tanggapan</h4>
</div>
<form action="{{ route('tanggapans.store',$data->id) }}" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
  <div class="card-body">
    @csrf
    <div class="form-group">
      <label>status</label>
      <select name="status" class="form-control" required>
        <option value="" selected disabled>--Choose--</option>
        <option value="proses" {{ $data->status == "proses" ? 'selected' : "" }}>proses</option>
          <option value="selesai" {{ $data->status == "selesai" ? 'selected' : "" }}>selesai</option>
      </select>
      <div class="invalid-feedback">
          Kelas is Required
      </div>
    </div>

    <div class="form-group">
      <label>Tanggapan</label> 
      <textarea name="tanggapan" class="form-control" style="height:150px;" required="" >@isset($tanggapan){{$tanggapan->tanggapan}}@endisset</textarea>
      <div class="invalid-feedback">
        Oh no! laporan is invalid
      </div>
    </div>
  
  </div>

  <div class="card-footer text-right">
    <button class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection
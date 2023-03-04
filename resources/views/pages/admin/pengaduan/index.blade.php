@extends('layout.app')

@section('content')

<div class=" text-right mr-5 ">
  @auth('web')
  <a href="{{ route($route.'.create')}}" class="btn btn-primary">Create</a>
  @endauth
</div>

  <div class="card-body">
    <div class="col-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <tr>
            <th>no</th>
            <th>Tanggal</th>
            <th>NIK</th>
            <th>Laporan</th>
            <th>Foto</th>
            <th>Status</th>
            <th class="text-center">Action</th>
          </tr>
          @foreach ($datas as $data)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->tgl_pengaduan}}</td>
            <td>{{$data->nik}}</td>
            <td>{{$data->isi}}</td>
            <td>
              <img src="{{ $data->foto}}" alt="" style="width:80px">
            </td>
            <td>
              <span class="badge 
                @if($data->status == 0)
                badge-danger
                @elseif($data->status == 'proses')
                badge-primary
                @elseif($data->status == 'selesai')
                badge-success
                @endif
              ">{{ $data->status == 0 ? 'menunggu respon' : $data->status }}</span>
            </td>
            <td class="text-center">
              <form action="{{ route($route.'.destroy', $data->id) }}"
                method="post">
                @csrf
                @method('DELETE')
                <a class="btn btn-success" href="{{ route($route.'.edit', $data ->id) }}">Tanggapi</a>
                @auth('web')
                <button type="submit" class="btn btn-danger">Delete</button>
                @endauth
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
      
    </div>

  </div>
@endsection
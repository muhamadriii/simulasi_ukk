@extends('layout.app')

@section('content')

<div class=" text-right mr-5 ">
  <a href="{{ route($route.'.create')}}" class="btn btn-primary">Create</a>
</div>

 <div class="card-body">
   <div class="col-12">
     <div class="table-responsive">
       <table class="table table-striped table-md">
         <tr>
           <th>no</th>
           <th>Username</th>
           <th>Password</th>
           {{-- <th>Role</th> --}}
           <th class="text-center">Action</th>
         </tr>
         @foreach ($datas as $data)
         <tr>
           <td>{{$loop->iteration}}</td>
           <td>{{$data->username}}</td>
           <td>{{ $data->password}}</td>
           {{-- <td>{{ $data->role }}</td> --}}
           <td class="text-center">
             <form action="{{ route($route.'.destroy', $data->id) }}"
               method="post">
               @csrf
               @method('DELETE')
               <a class="btn btn-info" href="{{ route($route.'.edit', $data ->id) }}">Edit</a>
               <button type="submit" class="btn btn-danger">Delete</button>
             </form>
           </td>
         </tr>
         @endforeach
       </table>
     </div>
     
   </div>

</div>
@endsection
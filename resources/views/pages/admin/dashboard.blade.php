@extends('layout.app')

@section('content1')
    
<div class="row">

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Siswa</h4>
          </div>
          <div class="card-body">
            {{ $countStudent}}
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Guru</h4>
          </div>
          <div class="card-body">
            {{ $countTeacher}}
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="far fa-folder-open"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Mapel</h4>
          </div>
          <div class="card-body">
            {{ $countSubject}}
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fas fa-school"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Kelas</h4>
          </div>
          <div class="card-body">
            {{ $countMajor}}
          </div>
        </div>
      </div>
    </div>
</div>

<div class="row">
  <div class="col-lg-8 col-md-12 col-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Latest Posts</h4>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped mb-0">
            <thead>
              <tr>
                <th>Mapel</th>
                <th></th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Introduction Laravel 5
                  <div class="table-links">
                    in <a href="#">Web Development</a>
                    <div class="bullet"></div>
                    <a href="#">View</a>
                  </div>
                </td>
                <td>
                  <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                </td>
                <td>
                  <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                  <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>
                  Laravel 5 Tutorial - Installation
                  <div class="table-links">
                    in <a href="#">Web Development</a>
                    <div class="bullet"></div>
                    <a href="#">View</a>
                  </div>
                </td>
                <td>
                  <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                </td>
                <td>
                  <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                  <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>
                  Laravel 5 Tutorial - MVC
                  <div class="table-links">
                    in <a href="#">Web Development</a>
                    <div class="bullet"></div>
                    <a href="#">View</a>
                  </div>
                </td>
                <td>
                  <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                </td>
                <td>
                  <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                  <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>
                  Laravel 5 Tutorial - Migration
                  <div class="table-links">
                    in <a href="#">Web Development</a>
                    <div class="bullet"></div>
                    <a href="#">View</a>
                  </div>
                </td>
                <td>
                  <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                </td>
                <td>
                  <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                  <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>
                  Laravel 5 Tutorial - Deploy
                  <div class="table-links">
                    in <a href="#">Web Development</a>
                    <div class="bullet"></div>
                    <a href="#">View</a>
                  </div>
                </td>
                <td>
                  <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                </td>
                <td>
                  <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                  <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>
                  Laravel 5 Tutorial - Closing
                  <div class="table-links">
                    in <a href="#">Web Development</a>
                    <div class="bullet"></div>
                    <a href="#">View</a>
                  </div>
                </td>
                <td>
                  <a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                </td>
                <td>
                  <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                  <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-12 col-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Task Terbaru</h4>
      </div>
      <div class="card-body">
        <ul class="list-unstyled list-unstyled-border">
          @foreach ($recentTask as $item)
          <li class="media">
            <div class="media-body">
              <div class="float-right text-primary"><div class="badge 
                @if($item->status == 'publish')
                  badge-info
                @else
                  badge-warning
                @endif
                ">{{ $item->status}}</div></div>
              <div class="media-title"><i class="fa fa-circle mr-3"></i><b> {{ $item->name}}</b> </div>
              <span class="text-small text-muted">{{ $item->desk}}</span>
            </div>
          </li>
          @endforeach
        </ul>
        <div class="text-center pt-1 pb-1">
          <a href="{{ route('tasks.index')}}" class="btn btn-primary btn-round">
            View All
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@push('script')
<script>
    $(document).ready(function() {

        function removehead() {
            $('.section-header').remove()
            $('.main-card').remove()
        }
        removehead()

    })
</script>
@endpush
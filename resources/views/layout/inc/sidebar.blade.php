<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="http://www.sman1megamendung.sch.id/" target="_blank" ><img src="{{ asset('images/logo.jpg')}}" alt="" style="width: 2.1rem; height:2.1rem;" class="rounded-circle mr-1"> SMANIM E-Task</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="http://www.sman1megamendung.sch.id/" target="_blank" ><img src="{{ asset('images/logo.jpg')}}" alt="" style="width: 2.1rem; height:2.1rem;" class="rounded-circle mr-1"></a>
      </div>
      <ul class="sidebar-menu">
          <li class="nav-item dropdown">
            <a href="{{ Route('dashboard')}}" class="nav-link "><i class="fas fa-home"></i><span>Dashboard</span></a>
          </li>
          @auth('web')
            <li class="menu-header">User Management</li>
            <li><a class="nav-link" href="{{ route('masyarakats.index')}}"><i class="far fa-square"></i> <span>Masyarakat</span></a></li>
            <li><a class="nav-link" href="{{ route('petugas.index')}}"><i class="far fa-square"></i> <span>Petugas</span></a></li>
            <li><a class="nav-link" href="{{ route('users.index')}}"><i class="far fa-square"></i> <span>admin</span></a></li>
            <li class="menu-header">Data</li>
            <li><a class="nav-link" href="{{ route('pengaduans.index')}}"><i class="far fa-square"></i> <span>pengaduan</span></a></li>
          @endauth
          @auth('petugas')
            <li class="menu-header">Data</li>
            <li><a class="nav-link" href="{{ route('masyarakats.index')}}"><i class="far fa-square"></i> <span>masyarakat</span></a></li>
            <li><a class="nav-link" href="{{ route('pengaduans.index')}}"><i class="far fa-square"></i> <span>pengaduan</span></a></li>
          @endauth
        </ul>

        {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        </div> --}}
    </aside>
  </div>
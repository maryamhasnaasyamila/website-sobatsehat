  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/assets/dist/img/logo-sobat-sehat.png')}}" alt="Logo Sobat Sehat" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sobat Sehat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info nav-item">
          <a href="{{ url('/dashboard')}}" class="d-block">
            <i class="nav-icon fa fa-user-circle" aria-hidden="true"></i>
               Dashboard Admin</a>
        </div>
      </div> --}}

      <nav class="mt-2">
        <div class="user-panel">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/dashboard')}}" class="nav-link">
              <i class="nav-icon fa fa-user-circle" aria-hidden="true"></i>
              <p> Dashboard Admin</p>
            </a>
          </li>
        </ul>
        </div>
      </nav>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/dashboard/kontributor')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p> Daftar Kontributor</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/dashboard/jadwal')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p> Daftar Jadwal</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/dashboard/lokasi')}}" class="nav-link">
              <i class="nav-icon fas fa-map-marked-alt"></i>
              <p> Daftar Lokasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->

      {{-- <div class="user-panel text-center fixed-bottom">
        <div class="info">
          <a href="{{ url('../logout')}}" class="d-block">
            <i class="nav-icon fa fa-power-off" aria-hidden="true"></i>
               Log Out</a>
        </div>
      </div> --}}
    </div>
    <!-- /.sidebar -->
  </aside>
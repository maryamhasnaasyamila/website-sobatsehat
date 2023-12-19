@extends('backend.layout.index')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Profil Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    

    <!-- Main content -->
    <section class="content">
      
      <div class="container-fluid">
          <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset('backend/assets/dist/img/logo-sobat-sehat.png')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Jeruk</h3>

                <p class="text-muted text-center">Administrator</p>

                {{-- <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul> --}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          <div>
            <!-- About Me Box -->
            <div class="card card-primary" style="margin: 5wh 10wh 5wh 10wh">
              <div class="card-header">
                <h3 class="card-title">Detail Informasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-address-card"></i> Nama Lengkap</strong>

                <p class="text-muted">
                  Kelompok 5 Jeruk
                </p>

                <hr>

                <strong><i class="fas fa-at"></i> Username</strong>

                <p class="text-muted">@jeruk5_rpl</p>

                <hr>

                <strong><i class="fas fa-lock"></i> Password</strong>

                <p class="text-muted">********</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
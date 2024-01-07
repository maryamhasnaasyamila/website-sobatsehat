@extends('backend.layout.index')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard Admin</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard Admin</li>
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
                                src="{{ asset('backend/assets/dist/img/logo-sobat-sehat.png') }}"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Kelompok Jeruk</h3>

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

                <div style="display:flex; justify-content:center">
                    <div class="row">
                        <!-- About Me Box -->
                        <div class="card col-md-2 card-primary card-outline"
                            style="width:20vw">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-user-circle"></i> Nama Lengkap</strong>
                                <p class="text-muted">
                                    Haura Tsabitah
                                </p>
                                <hr>
                                <strong><i class="fas fa-address-card"></i> NIM </strong>
                                <p class="text-muted">0110222242</p>
                                <hr>
                                <strong><i class="fas fa-star"></i> Kelas </strong>
                                <p class="text-muted">TI03</p>
                                <hr>
                                <strong><i class="fas fa-universal-access"></i> Peran </strong>
                                <p class="text-muted">Scrum Master</p>
                            </div>
                            <!-- /.card-body -->
                        </div>

                        <div class="card col-md-2 card-primary card-outline"
                            style="width:20vw">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-user-circle"></i> Nama Lengkap</strong>
                                <p class="text-muted">
                                    Maryam Hasnaa' S.
                                </p>
                                <hr>
                                <strong><i class="fas fa-address-card"></i> NIM </strong>
                                <p class="text-muted">0110222067</p>
                                <hr>
                                <strong><i class="fas fa-star"></i> Kelas </strong>
                                <p class="text-muted">TI03</p>
                                <hr>
                                <strong><i class="fas fa-universal-access"></i> Peran </strong>
                                <p class="text-muted">Product Owner</p>
                            </div>
                            <!-- /.card-body -->
                        </div>

                        <div class="card col-md-2 card-primary card-outline"
                            style="width:20vw">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-user-circle"></i> Nama Lengkap</strong>
                                <p class="text-muted">
                                    Ufaira Filestine Wafa
                                </p>
                                <hr>
                                <strong><i class="fas fa-address-card"></i> NIM </strong>
                                <p class="text-muted">0110222164</p>
                                <hr>
                                <strong><i class="fas fa-star"></i> Kelas </strong>
                                <p class="text-muted">TI02</p>
                                <hr>
                                <strong><i class="fas fa-universal-access"></i> Peran </strong>
                                <p class="text-muted">Developer</p>
                            </div>
                            <!-- /.card-body -->
                        </div>

                        <div class="card col-md-2 card-primary card-outline"
                            style="width:20vw">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-user-circle"></i> Nama Lengkap</strong>
                                <p class="text-muted">
                                    Isma Nabilah Hasibuan
                                </p>
                                <hr>
                                <strong><i class="fas fa-address-card"></i> NIM </strong>
                                <p class="text-muted">0110222033</p>
                                <hr>
                                <strong><i class="fas fa-star"></i> Kelas </strong>
                                <p class="text-muted"></p>
                                <hr>
                                <strong><i class="fas fa-universal-access"></i> Peran </strong>
                                <p class="text-muted">Developer</p>
                            </div>
                            <!-- /.card-body -->
                        </div>

                        <div class="card col-md-2 card-primary card-outline"
                            style="width:20vw">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-user-circle"></i> Nama Lengkap</strong>
                                <p class="text-muted">
                                    Alvi Sahri Siregar
                                </p>
                                <hr>
                                <strong><i class="fas fa-address-card"></i> NIM </strong>
                                <p class="text-muted">0110222041</p>
                                <hr>
                                <strong><i class="fas fa-star"></i> Kelas </strong>
                                <p class="text-muted"></p>
                                <hr>
                                <strong><i class="fas fa-universal-access"></i> Peran </strong>
                                <p class="text-muted">Developer</p>
                            </div>
                            <!-- /.card-body -->
                        </div>

                        <div class="card col-md-2 card-primary card-outline"
                            style="width:20vw">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-user-circle"></i> Nama Lengkap</strong>
                                <p class="text-muted">
                                    Dzakwan Firdaus
                                </p>
                                <hr>
                                <strong><i class="fas fa-address-card"></i> NIM </strong>
                                <p class="text-muted"></p>
                                <hr>
                                <strong><i class="fas fa-star"></i> Kelas </strong>
                                <p class="text-muted">0110222207</p>
                                <hr>
                                <strong><i class="fas fa-universal-access"></i> Peran </strong>
                                <p class="text-muted">Developer</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
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
    @if (Auth::user()->role != 'admin')
        <meta http-equiv="refresh" content="0; url=/dashboard/kontributor">
        {{ abort(403) }}
    @endif
@endsection

@extends('backend.layout.kontributor')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-account-group"></i>
            </span> Detail Kontributor
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>

        <div class="row">
          <div class="col-lg-12 stretch-card">
            <div class="card">
              <div class="card-body">
                <table class="table table-bordered">
                     @if (session('succes'))
                    <div class="alert alert-success">
                      {{ session('succes') }}
                    </div>
                    <meta http-equiv="refresh" content="3;url=/dashboard/kontributor">
                    @endif
                    <h4 class="card-title">Detail Kontributor</h4>
                      <thead class="table-info">
                        <tr>
                          <th> No. ID </th>
                          <th> Nama Lengkap </th>
                          <th> Username </th>
                          <th> Password </th>
                          <th> Email </th>
                        </tr>
                      </thead>
                      <tbody>
                            <tr>
                                <td> {{ $kontributor->id }} </td>
                                <td> {{ $kontributor->nama_kontributor }} </td>
                                <td> {{ $kontributor->username }} </td>
                                <td> {{ $kontributor->password }} </td>
                                <td> {{ $kontributor->email }} </td>
                            </tr>
                      </tbody>
                </table>
                <a href="/dashboard/lokasi" class="btn btn-sm btn-warning float-right" style="margin-top: 20px"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                Back</a>

              </div>
            </div>
          </div>
        </div>
    </div>

@endsection

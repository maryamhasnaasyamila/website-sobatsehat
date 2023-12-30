@extends('backend.layout.lokasi')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-account-group"></i>
            </span> Detail Lokasi
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
                    <meta http-equiv="refresh" content="3;url=/dashboard/lokasi">
                    @endif
                    <h4 class="card-title">Detail Lokasi</h4>
                      <thead class="table-info">
                        <tr>
                          <th> No. ID </th>
                          <th> Nama Lokasi </th>
                          <th> Alamat Lengkap </th>
                          <th> Kota </th>
                        </tr>
                      </thead>
                      <tbody>
                            <tr>
                                <td> {{ $lokasi->id }} </td>
                                <td> {{ $lokasi->nama_lokasi }} </td>
                                <td> {{ $lokasi->alamat }} </td>
                                <td> {{ $lokasi->kota }} </td>
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

@extends('backend.layout.lokasi')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Lokasi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/lokasi') }}">Daftar Lokasi</a></li>
                            <li class="breadcrumb-item active">Detail Data</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
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
                                    <h4 style="margin-bottom:0.5vw" class="card-title">Detail Lokasi</h4>
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
                                <a href="/dashboard/lokasi" class="btn btn-sm btn-warning float-right"
                                    style="margin-top: 20px"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                                    Back</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

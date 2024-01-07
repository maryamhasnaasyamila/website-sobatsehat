@extends('backend.layout.jadwal')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Jadwal Acara</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/jadwal') }}">Daftar Jadwal Acara</a></li>
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
                                        <meta http-equiv="refresh" content="3;url=/dashboard/jadwal">
                                    @endif
                                    <h4 style="margin-bottom:0.5vw" class="card-title">Detail Jadwal Acara</h4>
                                    <thead class="table-info">
                                        <tr>
                                            <th> No. ID </th>
                                            <th> Nama Acara </th>
                                            <th> Nama Penyelenggara </th>
                                            <th> Tanggal Acara </th>
                                            <th> Lokasi Acara </th>
                                            <th> Kota </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> {{ $jadwal->id }} </td>
                                            <td> {{ $jadwal->nama_acara }} </td>
                                            <td> {{ $jadwal->penyelenggara }} </td>
                                            <td> {{ $jadwal->tanggal }} </td>
                                            <td> {{ $jadwal->lokasi->nama_lokasi }} </td>
                                            <td> {{ $jadwal->lokasi->kota }} </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/dashboard/jadwal" class="btn btn-sm btn-warning float-right"
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

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
                            <li class="breadcrumb-item active">Daftar Lokasi</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div style="margin-bottom:0.5vw">
                    <a href="/dashboard/lokasi/create" class="btn btn-sm btn-warning">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        Data Lokasi
                    </a>
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
                                    <h4 style="margin-bottom:0.5vw" class="card-title">Data Lokasi</h4>
                                    <thead class="table-primary">
                                        <tr>
                                            <th> No </th>
                                            <th> Nama Lokasi </th>
                                            <th> Alamat Lengkap </th>
                                            <th> Kota </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lokasi as $loc)
                                            <tr>

                                                <td> {{ $loop->iteration }} </td>
                                                <td> {{ $loc->nama_lokasi }} </td>
                                                <td> {{ $loc->alamat }} </td>
                                                <td> {{ $loc->kota }} </td>
                                                <td>
                                                    <a href="{{ url('/dashboard/lokasi/show', $loc->id) }}"
                                                        class="btn btn-sm btn-info">View</a>
                                                    <a href="{{ url('/dashboard/lokasi/edit', $loc->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>
                                                    <form class="d-inline"
                                                        action="{{ url('/dashboard/lokasi/destroy', $loc->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection

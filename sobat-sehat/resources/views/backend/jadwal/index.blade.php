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
                            <li class="breadcrumb-item active">Daftar Jadwal Acara</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div style="margin-bottom:0.5vw">
                    <a href="/dashboard/jadwal/create" class="btn btn-sm btn-warning">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        Data Jadwal
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
                                        <meta http-equiv="refresh" content="3;url=/dashboard/jadwal">
                                    @endif
                                    <h4 class="card-title" style="margin-bottom:0.5vw">Acara Terkini</h4>
                                    <thead class="table-primary">
                                        <tr>
                                            <th> No </th>
                                            <th> Nama Acara </th>
                                            <th> Penyelenggara </th>
                                            <th> Tanggal </th>
                                            <th> Lokasi </th>
                                            <th> Kota </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jadwal as $jdwl)
                                            <tr>

                                                <td> {{ $loop->iteration }} </td>
                                                <td> {{ $jdwl->nama_acara }} </td>
                                                <td> {{ $jdwl->penyelenggara }} </td>
                                                <td> {{ $jdwl->tanggal }} </td>
                                                <td> {{ $jdwl->lokasi->nama_lokasi }} </td>
                                                <td> {{ $jdwl->lokasi->kota }} </td>
                                                <td>
                                                    <a href="{{ url('/dashboard/jadwal/show', $jdwl->id) }}"
                                                        class="btn btn-sm btn-info">View</a>
                                                    <a href="{{ url('/dashboard/jadwal/edit', $jdwl->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>
                                                    <form class="d-inline"
                                                        action="{{ url('/dashboard/jadwal/destroy', $jdwl->id) }}" method="post">
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

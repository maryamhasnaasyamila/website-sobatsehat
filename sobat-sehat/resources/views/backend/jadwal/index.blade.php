@extends('backend.layout.jadwal')
@section('content')
    <div class="margin:4vw">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-pill"></i>
                    </span> Daftar Jadwal Acara
                </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                    </ul>
                </nav>
            </div>

            <a href="/dashboard/jadwal/create" class="btn btn-sm btn-warning"> <i class="fa fa-plus-square" aria-hidden="true"></i>
               Data Jadwal</a>

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
                    <h4 class="card-title">Acara Terkini</h4>
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
                            <td> {{ $jdwl->lokasi }} </td>
                            <td> {{ $jdwl->kota }} </td>
                            <td>
                                <a href="{{ url('/dashboard/jadwal/show', $jdwl->id) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ url('/dashboard/jadwal/edit', $jdwl->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form class="d-inline" action="{{ url('/dashboard/jadwal/destroy', $jdwl->id) }}" method="post">
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
    </div>
@endsection

@extends('backend.layout.kontributor')
@section('content')
    <div class="margin:4vw">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-pill"></i>
                    </span> Daftar Kontributor Penyelenggara
                </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                    </ul>
                </nav>
            </div>

            <a href="/dashboard/kontributor/create" class="btn btn-sm btn-warning"> <i class="fa fa-plus-square" aria-hidden="true"></i>
               Data Kontributor</a>

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
                    <h4 class="card-title">Data Kontributor</h4>
                    <thead class="table-primary">
                        <tr>
                        <th> No </th>
                        <th> Nama Kontributor </th>
                        <th> Username </th>
                        <th> Password </th>
                        <th> Email </th>
                        <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($kontributor as $kontri)
                            <tr>

                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $kontri->nama_kontributor }} </td>
                            <td> {{ $kontri->username }} </td>
                            <td> {{ $kontri->password }} </td>
                            <td> {{ $kontri->email }} </td>
                            <td>
                                <a href="{{ url('/dashboard/kontributor/show', $kontri->id) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ url('/dashboard/kontributor/edit', $kontri->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form class="d-inline" action="{{ url('/dashboard/kontributor/destroy', $kontri->id) }}" method="post">
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

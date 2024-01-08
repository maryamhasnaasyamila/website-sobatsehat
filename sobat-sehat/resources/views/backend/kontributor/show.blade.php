@extends('backend.layout.kontributor')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Kontributor</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/kontributor') }}">Daftar Kontributor</a>
                            </li>
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
                                        <meta http-equiv="refresh" content="3;url=/dashboard/kontributor">
                                    @endif
                                    <h4 style="margin-bottom:0.5vw" class="card-title">Detail Kontributor</h4>
                                    <thead class="table-info">
                                        <tr>
                                            <th> No. ID </th>
                                            <th> Nama Kontributor </th>
                                            {{-- <th> Username </th> --}}
                                            <th> Password </th>
                                            <th> Email </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> {{ $kontributor->id }} </td>
                                            <td> {{ $kontributor->name }} </td>
                                            {{-- <td> {{ $kontributor->username }} </td> --}}
                                            <td> {{ $kontributor->password }} </td>
                                            <td> {{ $kontributor->email }} </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/dashboard/kontributor" class="btn btn-sm btn-outline-dark float-right"
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

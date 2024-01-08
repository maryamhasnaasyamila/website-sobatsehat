@extends('backend.layout.kontributor')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1>
                            Daftar Kontributor</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Daftar Kontributor</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>



        {{-- @if (Auth::user()->role == 'admin')
                <a href="/dashboard/kontributor/create" class="btn btn-sm btn-warning"> <i class="fa fa-plus-square"
                        aria-hidden="true"></i>
                    Data Kontributor</a>
            @endif --}}

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
                                    <h4 style="margin-bottom:0.5vw" class="card-title"><i class="fa fa-cubes"
                                            aria-hidden="true"></i>
                                        Data Kontributor</h4>
                                    <thead class="table-primary">
                                        <tr>
                                            <th> No </th>
                                            <th> Nama Kontributor </th>
                                            <th> Email </th>
                                            @if (Auth::user()->role == 'admin')
                                                <th> Action </th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kontributor as $kontri)
                                            <tr>

                                                <td> {{ $loop->iteration }} </td>
                                                <td> {{ $kontri->name }} </td>
                                                <td> {{ $kontri->email }} </td>
                                                @if (Auth::user()->role == 'admin')
                                                    <td>
                                                        <a href="{{ url('/dashboard/kontributor/show', $kontri->id) }}"
                                                            class="btn btn-sm btn-info">View</a>
                                                        {{-- <a href="{{ url('/dashboard/kontributor/edit', $kontri->id) }}"
                                                            class="btn btn-sm btn-warning">Edit</a> --}}
                                                        <form class="d-inline"
                                                            action="{{ url('/dashboard/kontributor/destroy', $kontri->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-sm btn-danger"
                                                                type="submit">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
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

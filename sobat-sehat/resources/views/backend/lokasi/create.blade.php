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
                            <li class="breadcrumb-item active">Tambah Data</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h4>Tambah Data Lokasi Acara</h4><br />
                        {{-- menampilkan error validasi --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- form validasi -->
                        <form class="forms-sample" action="{{ url('/dashboard/lokasi/store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="nama_lokasi" class="col-sm-4 col-form-label">Nama Lokasi Acara</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi"
                                        placeholder="Nama Lokasi Acara">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-sm-4 col-form-label">Alamat Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="Alamat Lengkap">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kota" class="col-sm-4 col-form-label">Kota/Kabupaten</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="kota" name="kota"
                                        placeholder="Kota/Kabupaten">
                                </div>
                            </div>

                            <button type="reset" class="btn btn-sm btn-danger float-right" style="margin-left: 5px">
                                Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary me-2 float-right"
                                style="margin-right: 5px">Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

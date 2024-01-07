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
                            <li class="breadcrumb-item active">Edit Data</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h3>Edit Data Jadwal Acara</h3><br />
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
                        <form class="forms-sample" action="{{ url('/dashboard/jadwal/update', $jadwal->id) }}"
                            method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="nama_acara" class="col-sm-4 col-form-label">Nama Acara</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_acara" name="nama_acara"
                                        value="{{ $jadwal->nama_acara }}" placeholder="Nama Acara">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="penyelenggara" class="col-sm-4 col-form-label">Nama Penyelenggara</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="penyelenggara" name="penyelenggara"
                                        value="{{ $jadwal->penyelenggara }}" placeholder="Nama Penyelemggara">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Acara</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                                        value="{{ $jadwal->tanggal }}" placeholder="Tanggal Acara">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lokasi" class="col-sm-4 col-form-label">Lokasi Acara</label>
                                <div class="col-sm-8">
                                    <select name="lokasi_id" id="lokasi" class="form-control">
                                        <option value="">Pilih lokasi</option>
                                        @foreach ($lokasi as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->id == $jadwal->lokasi_id ? 'selected' : '' }}>
                                                {{ $item->nama_lokasi . ' ' . $item->kota }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <button type="reset" class="btn btn-sm btn-danger float-right" style="margin-left: 5px">
                                Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary me-2 float-right"
                                style="margin-right: 5px">Save
                            </button>
                        </form>
                        <a href="/dashboard/jadwal" class="btn btn-sm btn-warning"><i class="fa fa-arrow-circle-left"
                                aria-hidden="true"></i>
                            Back</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

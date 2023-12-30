@extends('backend.layout.jadwal')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-book"></i>
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
                <form class="forms-sample" action="{{ url('/dashboard/jadwal/update', $jadwal->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <label for="nama_acara" class="col-sm-4 col-form-label">Nama Acara</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_acara" name="nama_acara"
                                placeholder="Nama Acara" value="{{ $jadwal->nama_acara }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="penyelenggara" class="col-sm-4 col-form-label">Nama Penyelenggara</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="penyelenggara" name="penyelenggara"
                                placeholder="Nama Penyelenggara" value="{{ $jadwal->penyelenggara }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Acara</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                placeholder="Tanggal Acara" value="{{ $jadwal->tanggal }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-4 col-form-label">Lokasi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="lokasi" name="lokasi"
                                placeholder="Lokasi" value="{{ $jadwal->lokasi }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="kota" class="col-sm-4 col-form-label">Kota</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="kota" name="kota"
                                placeholder="Kota" value="{{ $jadwal->kota }}">
                        </div>
                    </div>

                    <button type="reset" class="btn btn-sm btn-danger float-right" style="margin-left: 5px"> Reset</button>
                    <button type="submit" class="btn btn-sm btn-primary me-2 float-right" style="margin-right: 5px">Save </button>
                </form>
                <a href="/dashboard/jadwal" class="btn btn-sm btn-warning"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                    Back</a>
            </div>
        </div>
    </div>

@endsection

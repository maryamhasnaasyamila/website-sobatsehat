@extends('backend.layout.jadwal')
@section('content')
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
            <a href="/backend/apotek/create" class="btn btn-sm btn-primary"><i class="mdi mdi-plus"></i> Tambah Data</a>
            <div class="row">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                      @if (session('succes'))
                        <div class="alert alert-success">
                          {{ session('succes') }}
                        </div>
                        <meta http-equiv="refresh" content="3;url=/dashboard/apotek">
                      @endif
                    <h4 class="card-title">Daftar Apotek Tersedia</h4>
                      <thead class="table-success">
                        <tr>
                          <th> No </th>
                          <th> Nama Apotek </th>
                          <th> Alamat Apotek </th>
                          <th> Kontak Apotek </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach ($apotek as $apt)
                            <tr>
                                
                              <td> {{ $loop->iteration }} </td>
                              <td> {{ $apt->name }} </td>
                              <td> {{ $apt->alamat }} </td>
                              <td> {{ $apt->kontak }} </td>
                              <td>
                                  <a href="{{ url('/backend/apotek/show', $apt->id) }}" class="btn btn-sm btn-info">View</a>
                                  <a href="{{ url('/backend/apotek/edit', $apt->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                  <form class="d-inline" action="{{ url('/backend/apotek/destroy', $apt->id) }}" method="post">
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
@endsection
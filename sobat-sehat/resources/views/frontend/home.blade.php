@extends('frontend.layout.index')

@section('content')
    <style>
    </style>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Bersama Sobat Sehat</h1>
                    <h2>Lestarikan budaya dan tingkatkan kesehatan Indonesia!</h2>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/img/landingpage1.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2> Event Terkini</h2>

                    <form method="post" style="display:flex; justify-content:center">
                        @csrf
                        <div class="row">
                            <div class="col-5">
                                <input type="date" class="form-control" value="{{!$tanggal ? "" : $tanggal}}" name="tanggal" placeholder="Cari tanggal yang pas!">
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="kota" placeholder="Cari kotamu disini!" value="{{!$kota ? "" : $kota}}">
                            </div>
                            <div class="col-1">
                                <input type="submit" value="Filter" class="btn btn-md btn-info">
                            </div>
                        </div>
                    </form>
                </div>
                {{-- BARIS PERTAMA --}}
                <div class="row" style="display:flex; justify-content:center">

                    @foreach ($jadwal as $item)
                        <div class="col-xl-3 mb-3 col-md-4 d-flex align-items-stretch" data-aos="zoom-in"
                            data-aos-delay="100">
                            <div class="icon-box" style="width:300px;">
                                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                <h4><a href="">{{ $item->nama_acara }}</a></h4>
                                <small>Penyelenggara: {{ $item->penyelenggara }}</small>
                                <p>Tanggal: {{ $item->tanggal }}</p>
                                <p>Lokasi: {{ $item->lokasi->nama_lokasi }}</p>
                                <p>Kota: {{ $item->lokasi->kota }}</p>
                            </div>
                        </div>
                    @endforeach
                </div><br>


            </div>
        </section><!-- End Services Section -->


    </main><!-- End #main -->
@endsection

@extends('dashboard.layouts.main')

@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard/location.css') }}">
@endsection

@section('content')
    <!-- Title Start -->
    <section class="title">
        <div class="row">
            <div class="col-4">
                <h1>Cabang Kami</h1>
            </div>
            <div class="col-8">
                <h5>Kami memiliki 7 cabang toko bangunan yang tersebar di daerah Bogor <br>Jawa Barat</h5>
            </div>
        </div>
    </section>

    <div class="map">
        <img src="/images/map.png" alt="maps" width="auto" class="img-fluid">
    </div>
    <!-- Title End -->

    <!-- Lokasi Start -->
    <section class="lokasi">
        <div class="container-fluid">
            <h2 class="text-center">Lokasi Cabang Kami</h2>
            <div class="row mb-lg-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="image">
                            <img src="/images/Location/KB01-loc.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Klik Bangunan Bojongsari</h5>
                                <p class="card-text">Jalan Raya Sawangan Parung, Curug, Kec. Bojongsari, Kota Depok</p>
                                <div class="d-grid gap-2">
                                    <a href="https://maps.app.goo.gl/yQbY9PTsVtSBWZKa9"<button type="button" class="btn btn-outline-warning"><i
                                            class="bi bi-geo-alt-fill"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="image">
                            <img src="/images/Location/KB02.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">JS Bangunan Gunung Sindur</h5>
                                <p class="card-text">Jl. Serpong-Parung, Padurenan, Kec. Gn. Sindur, Kabupaten Bogor</p>
                                <div class="d-grid gap-2">
                                    <a href="https://maps.app.goo.gl/q1Jufh9rMMeMFWoZ9"<button type="button" class="btn btn-outline-warning"><i
                                            class="bi bi-geo-alt-fill"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="image">
                            <img src="/images/Location/KB04.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Super Bangunan Cikaret</h5>
                                <p class="card-text">Jl. Raya Cikaret No.8, Harapan Jaya, Kec. Cibinong, Kabupaten
                                    Bogor</p>
                                <div class="d-grid gap-2">
                                    <a href="https://maps.app.goo.gl/95JQHigcA4SsvM5V9"<button type="button" class="btn btn-outline-warning"><i
                                            class="bi bi-geo-alt-fill"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="image">
                            <img src="/images/Location/KB05.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Klik Bangunan Tanah Sereal</h5>
                                <p class="card-text">Jl. Sholeh Iskandar, RT.01/RW.04, Cibadak, Kec. Tanah Sereal, Kota
                                    Bogor</p>
                                <div class="d-grid gap-2">
                                    <a href="https://maps.app.goo.gl/EPKCgxG8idY6yN2NA"<button type="button" class="btn btn-outline-warning"><i
                                            class="bi bi-geo-alt-fill"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="image">
                            <img src="/images/Location/KB06-loc.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Klik Bangunan Curug</h5>
                                <p class="card-text">Jl. Raya Curug, RT.002/RW.009, Curug, Kec. Bojongsari, Kota Depok
                                </p>
                                <div class="d-grid gap-2">
                                    <a href="https://maps.app.goo.gl/rT617KSUaB2ismRY6"<button type="button" class="btn btn-outline-warning"><i
                                            class="bi bi-geo-alt-fill"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="image">
                            <img src="/images/Location/KB07-loc.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Klik Bangunan Tugu Macan</h5>
                                <p class="card-text">Jl. Tugu Macan, Ragajaya, Kecamatan Bojonggede,
                                    Kabupaten Bogor</p>
                                <div class="d-grid gap-2">
                                    <a href="https://maps.app.goo.gl/YD8gorD2aZvuCB3n6"<button type="button" class="btn btn-outline-warning"><i
                                            class="bi bi-geo-alt-fill"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lokasi End -->

    <!-- Extra Start -->
    <section class="extra">
        <div class="container">
            <div class="row mb-lg-4 justify-content-evenly">
                <div class="col-md-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.763437476752!2d106.6929685!3d-6.424432800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e78a3ab17f39%3A0x9c68bf53085587b9!2sPT%20KLIK%20SEMANGAT%20INDONESIA!5e0!3m2!1sen!2sid!4v1701574932647!5m2!1sen!2sid"
                        width="100%" height="500" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h1 class="text-center fw-bold">Head Office</h1>                
                    <h5>Jl. Raya Pahlawan No.889, Cogreg, Kec. Parung, Kabupaten Bogor</h5>
                    <div class="d-grid gap-2">
                        <a href="https://maps.app.goo.gl/hGqRH3TPprZqcNH96"<button type="button" class="btn btn-outline-danger"><i
                                class="bi bi-geo-alt-fill"></i></button></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9641850578446!2d106.71218767527212!3d-6.398616862582555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e72acafcd6ff%3A0xf25922e633fdeabd!2sDC%20Klik%20Bangunan%20Parung!5e0!3m2!1sid!2sid!4v1702873064914!5m2!1sid!2sid"
                        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h1 class="text-center fw-bold">Distribution Center</h1>
                    <h5>Jl. Pemuda No.889, Padurenan, Kec. Gn. Sindur, Kabupaten Bogor</h5>
                    <div class="d-grid gap-2">
                        <a href="https://maps.app.goo.gl/R1zbhnaph92zRvMZA"<button type="button" class="btn btn-outline-danger"><i
                                class="bi bi-geo-alt-fill"></i></button></a>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
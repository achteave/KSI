@extends('dashboard.layouts.main')

@section('content')
<!-- Header Start -->
    <section class="header">
        <div class="overlay">
            <div class="text-center">
                <h5>#BanggaMenjadiKSI
                    <br>#DoTheBest
                    <br>#ExtraMiles
                </h5>
                <h1>Klik Semangat<br>
                    Indonesia</h1>
                <a class="btn btn-outline-light" href="#sejarah" class="text-success
                    " style="text-decoration: none;">Lihat Selengkapnya</a>
            </div>
        </div>
    </section>
    <section id="sejarah" style="padding-top: 80px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title mb-5 text-center">SEJARAH KSI</h2>
                            <div class="hori-timeline" dir="ltr">
                                <ul class="list-inline events">
                                    <li class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date bg-light text-success">2003</div>
                                            <img src="/images/Location/KB01.png" class="img-thumbnail">
                                            <h5 style="font-family: 'Comic Neue', sans-serif; font-weight: 700;"
                                                class="font-size-16">TB Ketapang Jaya</h5>
                                        </div>
                                    </li>
                                    <li class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date bg-light text-success">2009</div>
                                            <img src="/images/Location/KB02.jpg" class="img-thumbnail">
                                            <h5 style="font-family: 'Comic Neue', sans-serif; font-weight: 700;"
                                                class="font-size-16">TB Jaya Sentosa</h5>
                                        </div>
                                    </li>
                                    <li class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date bg-light text-success">2018</div>
                                            <img src="/images/Location/KB03 : KSI (1).png" class="img-thumbnail">
                                            <h5 style="font-family: 'Comic Neue', sans-serif; font-weight: 700;"
                                                class="font-size-16">Klik Bangunan</h5>
                                        </div>
                                    </li>
                                    <li class="list-inline-item event-list">
                                        <div class="px-4">
                                            <div class="event-date bg-light text-success">2020</div>
                                            <img src="/images/KSI.png" class="img-thumbnail">
                                            <h5 style="font-family: 'Comic Neue', sans-serif; font-weight: 700;"
                                                class="font-size-16">Klik Semangat Indonesia</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a class="btn btn-outline-light" href="/aboutus" class="text-light
                    " style="text-decoration: none;">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
    </section>
    <!-- Header done -->
    <!-- Visi-Misi Start -->
    <section class="home">
        <div class="visi-misi">
            <div class="container flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <h3 class="text-center fw-bold">VISI</h3>
                                <p class="text-center">
                                    Menjadi Outlet Modern Bahan Bangunan yang memberikan pelayanan
                                    yang terbaik dan terlengkap berjumlah 100 outlet di
                                    Jabodetabek pada tahun 2024
                                </p>
                            </div>
                            <div class="card-back">
                                <h3 class="text-center fw-bold">MISI</h3>
                                <ol class="start-0">
                                    <li>
                                        Menciptakan Perusahaan yang Tumbuh dan Profit sehingga mampu
                                        menjadi pemimpin pasar
                                    </li>
                                    <li>
                                        Memberikan Kepuasan Pelanggan dengan Layanan yang
                                        Outstanding
                                    </li>
                                    <li>
                                        Menciptakan Pemimpin - Pemimpin yang Berintegritas dan
                                        Loyalitas tinggi
                                    </li>
                                    <li>
                                        Meningkatkan Kesejahteraan Karyawan yang Berprestasi dan
                                        Kontribusi Besar
                                    </li>
                                    <li>
                                        Membantu Pemilik Bisnis memiliki Toko Bangunan Modern yang
                                        Menguntungkan
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Visi-Misi End -->
@endsection
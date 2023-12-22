@extends('dashboard.layouts.main')

@section('content')
<!-- update -->
    <div class="box">
        <div class="update-container">
        <div class="update" style="padding-top: 70px;">
        <h2>EVENT KSI</h2>
        <p>Kegiatan - kegiatan yang dilakukan oleh tim Klik Semangat Indonesia </p>
        <div class="image-container"> 
            <img src="images/event-page.jpg" alt="update1" width="700" height="600">
        </div>
        <h3>#KSIberbagikepadasesama</h3>
    </div>

            <div class="svg-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="272" viewBox="0 0 162 272" fill="none">
                    <path d="M271.541 136C271.541 210.835 210.876 271.5 136.041 271.5C61.2066 271.5 0.541147 210.835 0.541147 136C0.541147 61.1654 61.2066 0.5 136.041 0.5C210.876 0.5 271.541 61.1654 271.541 136Z" fill="url(#paint0_linear_31_380)"/>
                    <defs>
                        <linearGradient id="paint0_linear_31_380" x1="134.5" y1="21" x2="134.5" y2="292" gradientUnits="userSpaceOnUse">
                            <stop offset="0.151042" stop-color="#13435C"/>
                            <stop offset="0.833333" stop-color="#F36F27"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>

<!-- berita -->
@foreach ($events as $ev)
<div class="container-news">
    <div class="row custom-row">
        <div class="col-md-4">
            <img src="{{ asset('storage/public/' . $ev->image) }}" class="card-img-top" alt="csr">
        </div>
        <div class="col-md-8">
            <h5 class="card-title">{{ $ev->title }}</h5>
            <p class="card-text">{{ $ev->body }}</p>
            <p class="card-text"><small class="text-body-secondary">{{ $ev->date }}</small></p>
        </div>
    </div>
</div>
@endforeach
  

@endsection

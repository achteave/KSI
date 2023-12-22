@extends('dashboard.layouts.main')

@section('content')
<!-- Sejarah Start -->
  <section class="sejarah text-light" style="background-color: rgb(1, 66, 93)">
    <h1 class="text-center fw-bold" style="font-family: Verdana, Geneva, Tahoma, sans-serif">
      Sejarah Klik Semangat Indonesia
    </h1>
    <div class="container py-5">
      <div class="main-timeline-2">
        <div class="timeline-2 left-2">
          <div class="card">
            <img src="/images/Location/KB01.png" class="card-img-top" alt="Responsive image" />
            <div class="card-body p-4">
              <h4 class="fw-bold mb-2">TB Ketapang Jaya</h4>
              <p class="text-muted mb-2">
                <i class="far fa-clock" aria-hidden="true"></i> 2003
              </p>
              <p class="mb-0">
                Owner membuka toko pertamanya dengan komitmen dan semangat
                yang tinggi di Bojongsari, Kota Depok.
              </p>
            </div>
          </div>
        </div>
        <div class="timeline-2 right-2">
          <div class="card">
            <img src="/images/Location/KB02.jpg" class="card-img-top" alt="Responsive image" />
            <div class="card-body p-4">
              <h4 class="fw-bold mb-2">TB Jaya Sentosa</h4>
              <p class="text-muted mb-2">
                <i class="far fa-clock" aria-hidden="true"></i> 2009
              </p>
              <p class="mb-0">
                Disusul oleh adiknya, toko bangunan kedua dibuka di Padurenan
                , Gunung Sindur
              </p>
            </div>
          </div>
        </div>
        <div class="timeline-2 left-2">
          <div class="card">
            <img src="/images/Location/KSI : KB03.png" class="card-img-top" alt="Responsive image" />
            <div class="card-body p-4">
              <h4 class="fw-bold mb-2">Klik Bangunan</h4>
              <p class="text-muted mb-2">
                <i class="far fa-clock" aria-hidden="true"></i> 2018
              </p>
              <p class="mb-0">
                15 tahun kemudian, dibukalah toko ketiga dengan konsep toko
                bangunan modern di Cogreg, Ciseeng
              </p>
            </div>
          </div>
        </div>
        <div class="timeline-2 right-2">
          <div class="card">
            <img src="/images/KSI.png" class="card-img-top" alt="Responsive image"
              style="border-bottom: 0.5px solid black" />
            <div class="card-body p-4">
              <h4 class="fw-bold mb-2">Klik Semangat Indonesia</h4>
              <p class="text-muted mb-2">
                <i class="far fa-clock" aria-hidden="true"></i> 2020
              </p>
              <p class="mb-0">
                Akhirnya Owner dan adiknya mengambil langkah strategis dengan
                sepakat untuk bergabung dan mendirikan kantor pusat
                perusahaan. Kantor pusat ini dibangun di Cabang Ketiga, Cogreg
                Ciseeng
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Sejarah Done -->

  <!-- Visi-misi Start -->
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
  <!-- Visi-misi done -->

  <!-- Budaya Start -->
  <section class="budaya">
    <div class="container-fluid text-center">
      <h1 class="fw-bold" style="font-size: 50px;">Budaya Perusahaan</h1>
      <div class="row mb-2">
        <div class="col">
          <img src="/images/honest.png" height="150px" width="auto" />
          <p style="font-family: 'Comic Neue', sans-serif; font-weight: 700;">Jujur dalam bekerja</p>
        </div>
        <div class="col">
          <img src="/images/trust.png" height="150px" width="auto" />
          <p style="font-family: 'Comic Neue', sans-serif; font-weight: 700;">Amanah selalu di jaga</p>
        </div>
        <div class="col">
          <img src="/images/fight-spirit.png" height="150px" width="auto" />
          <p style="font-family: 'Comic Neue', sans-serif; font-weight: 700;">Semangat dalam melayani</p>
        </div>
        <div class="col">
          <img src="/images/positive-vote.png" height="150px" width="auto" />
          <p style="font-family: 'Comic Neue', sans-serif; font-weight: 700;">Positive</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <img src="/images/consistent.png" height="150px" width="auto" />
          <p style="font-family: 'Comic Neue', sans-serif; font-weight: 700;">Konsisten dalam bekerja</p>
        </div>
        <div class="col">
          <img src="/images/leadership.png" height="150px" width="auto" />
          <p style="font-family: 'Comic Neue', sans-serif; font-weight: 700;">Leadership</p>
        </div>
        <div class="col">
          <img src="/images/solution.png" height="150px" width="auto" />
          <p style="font-family: 'Comic Neue', sans-serif; font-weight: 700;">Inisiatif dan Inovatif</p>
        </div>
        <div class="col">
          <img src="/images/success.png" height="150px" width="auto" />
          <p style="font-family: 'Comic Neue', sans-serif; font-weight: 700;">Kesuksesan milik bersama</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Budaya Done -->

  <!-- Review Start -->
  <section class="review">
    <div class="container-fluid">
      <h1 class="text-center fw-bold" style="font-size: 50px;">Review</h1>
      <p class="text-center" style="font-family: 'Comic Neue', sans-serif; font-weight: 700; font-size: 30px;">Apa yang
        mereka katakan?
      </p>
      <div class="row mb-2" style="text-align: justify">
        <div class="col">
          <h6>Achmad Syarif</h6>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <p>
            Proses nya cukup Nyaman. Walau emang ruangan cukup. Bisa lebih
            dekat dengan peserta lain. Mudah2an bisa bergabung dengan
            Perusahaan ini.
          </p>
          <a href="https://maps.app.goo.gl/kQRQM48hdfaqQrLn6" class="btn-box">
            <button>
              <span class="box"> Lihat ! </span>
            </button>
          </a>
        </div>
        <div class="col">
          <h6>Sultan Qodir</h6>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <p>
            Pengalaman interview yang luar biasa dan membuat saya saling
            mengenal karakter sesama pelamar, walaupun saya baru ketemu
            pertama kali
          </p>
          <a href="https://maps.app.goo.gl/p8PZsQ8xhf72BWa68" class="btn-box">
            <button>
              <span class="box"> Lihat ! </span>
            </button>
          </a>
        </div>
        <div class="col">
          <h6>Dodik Asterix</h6>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <p>
            Interviewnya fun dan bisa dikatakan bermain logika berpikir
            kreatif..keren..bisa ditingkatkan lagi untuk fun games atau ada
            ice breaking biar ga tegang ..
          </p>
          <a href="https://maps.app.goo.gl/vToc9dRX6U2ZP2MA8" class="btn-box">
            <button>
              <span class="box"> Lihat ! </span>
            </button>
          </a>
        </div>
      </div>
      <div class="row mb-2" style="text-align: justify">
        <div class="col">
          <h6>Rahmattika Dikha</h6>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <p>
            Interview yang sangat menyenangkan tidak membuat tegang peserta
            nya, tempat interview juga nyaman sekali. Semoga rejeki ditempat
            ini.
          </p>
          <a href="https://maps.app.goo.gl/HCTqaMH4JqmdunTu8" class="btn-box">
            <button>
              <span class="box"> Lihat ! </span>
            </button>
          </a>
        </div>
        <div class="col">
          <h6>Yuniiar Handayanii</h6>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <p>
            Pengalaman interview yang sangat menyenangkan, tidak terasa
            seperti interview, the best sukses selalu pt klik semangat
            indonesia
          </p>
          <a href="https://maps.app.goo.gl/9xTV8ke7sbvQ3YgV8" class="btn-box">
            <button>
              <span class="box"> Lihat ! </span>
            </button>
          </a>
        </div>
        <div class="col">
          <h6>Milalaila Sari</h6>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <p>
            keseruan interview hari ini adalah, interview tersantai dri
            seluruh perusahaan,ketemu staf2 yg baik2 dan ketemu teman2 semuaa
            yg hebat, terimakasih klik semangat indonesia
          </p>
          <a href="https://maps.app.goo.gl/NXJfjs9dnLaU9hJx5" class="btn-box">
            <button>
              <span class="box"> Lihat ! </span>
            </button>
          </a>
        </div>
      </div>
      <a href="https://www.google.com/maps/place/PT+KLIK+SEMANGAT+INDONESIA/@-6.4244275,106.6903936,17z/data=!4m8!3m7!1s0x2e69e78a3ab17f39:0x9c68bf53085587b9!8m2!3d-6.4244328!4d106.6929685!9m1!1b1!16s%2Fg%2F11t2y_pm_j?entry=ttu"
        class="btn-box">
        <button>
          <span class="box"> Lihat lebih banyak ! </span>
        </button>
      </a>
    </div>
  </section>
@endsection
@extends('dashboard.layouts.main')

@section('content')

<div class="main-container">
        <div class="box1">
            <img src="images/office.png" alt="Image">
            <div class="text-content">
                <h2>Hubungi<br>Kami</h2><br>
                <p>Untuk Info Lebih Lanjut bisa hubungi nomor dibawah ini</p>
                <p><br>
                (+62)81216230822<br>
                Jl. Raya Pahlawan No.889, Cogreg, Kec. Parung<br>
                , Kabupaten Bogor, Jawa Barat 16330</p>
            </div>
        </div>
        <div class="box2">
            <div class="card">
                <form action="/contact/message" method="post">
                    @csrf
                    <div class="row">
                    <div class="mb-3 col">
                        <label for="name" class="form-label">Nama*</label>
                        <input type="text" name="name" class="form-control" placeholder="" aria-label="Name">
                    </div>
    
                    <div class="mb-3 col">
                        <label for="email" class="form-label">Email*</label>
                        <input type="text" name="email" class="form-control" placeholder="" aria-label="Email">
                    </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="phone" class="form-label">Phone*</label>
                            <input type="text" name="phone" class="form-control" placeholder="" aria-label="Phone">
                        </div>
                        <div class="mb-3 col">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" name="company" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message*</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Please type your message here..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="box0">
        <div class="text-box">
            <h2>Ingin bergabung dengan KSI?<br>
            Kami selalu membuka kesempatan untuk<br>
            Anda yang ingin bergabung
            </h2>
        </div>
    </div>
        <div class="box3">
        <div class="orange-wrapper">
            <div class="card1">
                <form action="/contact/job_application" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <p>Lengkapi form dibawah ini, dan pastikan data yang anda berikan benar! Cantumkan
                            juga CV anda</p>
                        <div class="mb-3 col">
                            <label for="name" class="form-label">Nama*</label>
                            <input type="text" name="name" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3 col">
                            <label for="email" class="form-label">Email*</label>
                            <input type="text" name="email" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="phone" class="form-label">No. Telp*</label>
                            <input type="text" name="phone" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3 col">
                            <label for="nik" class="form-label">NIK*</label>
                            <input type="text" name="nik" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                        <label for="bidang" class="form-label">Bidang*</label>
                        <select class="form-select" aria-label="bidang" name="bidang">
                            <label for="bidang" class="form-label">Bidang</label>
                            <option selected>Staff gudang</option>
                            <option value="Store Manager">Store Manager</option>
                            <option value="Merchandise Store">Merchandise Store</option>
                            <option value="Crew Store">Crew Store</option>
                            <option value="Driver">Driver</option>
                        </select><br>
                        <div class="mb-3 col">
                            <label for="formFile" class="form-label">Upload CV*</label>
                            <input class="form-control" name="cv" type="file" id="formFile" placeholder="Upload CV-mu">
                        </div> 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection

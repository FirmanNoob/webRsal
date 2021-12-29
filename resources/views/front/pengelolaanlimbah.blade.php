@extends('layouts1.master')

@section('content')
<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/halamandepan.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Home</a></span> <span>dokter</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Jadwal Dokter</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
          <div class="heading-section ftco-animate">
            <h2 class="mb-3">Unit Pengolahan Limbah</h2>
            <img src="{{ asset('images/limbah-300x225.png')}}" class="d-flex mx-auto" alt="">
            <p><strong> PENGELOLAAN LIMBAH CAIR</strong></p>
            <p>
                <ul>
                    <li>Diolah di IPAL (Instalasi Pengolahan Air Limbah)</li>
                    <li>IPAL yang ada di RSMTH terdiri dari 2 IPAL : IPAL Lama (Bioreaktor) dan IPAL Kompak 100</li>
                    <li>Kapasitas : IPAL Lama (Bioreaktor) : 80 M3 dan IPAL Kompak 100 : 120 M3</li>
                </ul>
            </p>
            <p>
                <ol>
                    <li><strong>INSTALASI PENGOLAHAN AIR LIMBAH (IPAL)</strong>
                    <ul>
                        <li>
                        SUMBER LIMBAH CAIR
                            <ol>
                                <li>Limbah Domestik</li>
                                <li>Limbah Medis</li>
                            </ol>
                        </li>
                        <li>SISTEM JARINGAN PENGUMPUL LIMBAH CAIR RS
                            <br>Pemipaan primer,sekunder,tertier, bak penampung, bak kontrol
                        </li>
                        <li>PRE TREATMENT (PRA PENGOLAHAN)
                            <ol>
                                <li>Septictank</li>
                                <li>PTB Kitchen, berfungsi untuk pemisahan lemak dan sisa-sisa makanan dari Dapur/ Gizi.</li>
                                <li>PTB Laundry, berfungsi untuk pemisahan deterjen dari Laundry</li>
                                <li>Heavy Metal Precipitator, berfungsi untuk pemisahan senyawa logam berat dari Laboratorium</li>
                            </ol>
                        </li>
                    </ul>
                    </li>
                    <li>RECYCLING AIR LIMBAH
                        <br>    Berfungsi sebagai Recycling atau pemanfaatan air limbah yang diolah menjadi air bersih yang dapat digunakan untuk siram tanaman dan cuci mobil.
                    </li>
                </ol>
            </p>
            <p><strong>INCENERATOR RUMKITAL Dr. MINTOHARDJO</strong></p>
            <p>
                <ol>
                    <li>PENGELOLAAN LIMBAH PADAT
                        <ul>
                            <li>Limbah Padat Non Medis</li>
                            <li>Limbah Padat Medis</li>
                            <li>Limbah Medis Tajam</li>
                        </ul>
                    </li>
                </ol>
            </p>
            <p>Incenerator di Rumkital Dr. Mintohardjo berfungsi sebagai alat pemusnah limbah padat medis dan limbah medis tajam. Incenerator di Rumkital Dr. Mintohardjo hanya melakukan pembakaran dari internal belum menerima pembakaran sampah medis dari external. Pembakaran sampah medis menggunakan suhu diatas 1000 °C sehingga menghasilkan sisa abu yang tidak berbahaya dan tidak mencemari lingkungan.</p>
            <p class="mt-5" style="text-align: center;">
            <strong>Informasi</strong><br>
              <strong> Bagian Pemakaman Jenazah</strong>
                <br>
                Telp : (021) 5703081 – 85 <br>
                Direct: (021)5721390<br>
            </p>
          </div>
      </div>
      </div>
    </section>
@stop
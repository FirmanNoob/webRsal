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
            <p class="text-danger text-center"><strong> ” Kesehatan  bukanlah  segalanya , tetapi  tanpa  kesehatan  segala  sesuatu  tiada  artinya ” .</strong></p>
            <img src="{{ asset('images/med-check-300x172.png')}}" class="d-flex mx-auto" alt="">
            <p class="mt-4">
            Berbagai penyakit degeneratif kronis seperti hipertensi, stroke, diabetes, kelainan pada liver dan jantung sering dihubungkan dengan gaya hidup modern.
            <br>
            Berbagai penyakit degeneratif kronis seperti hipertensi, stroke, diabetes, kelainan pada liver dan jantung sering dihubungkan dengan gaya hidup modern.
            <br>Medical Check Up Rumkital Dr. Mintohardjo, memberikan pelayanan uji pemeriksaan kesehatan yang lengkap dan terpadu, yang dirancang oleh dokter spesialis kami melalui berbagai paket medical check up.
            </p>
            <p>
              <strong>Persiapan dan Keterangan Lain:</strong>
              <ul>
                <li>Pelayanan Medical Check Up dilaksanakan hari Senin s/d Kamis Pendaftaran mulai pukul 07.00 s/d 09.00</li>
                <li>Peserta diwajibkan puasa malam sebelumnya mulai pukul 22.00 WIB, namun diperbolehkan minum air putih sampai dengan 2 jam sebelum pengambilan darah.</li>
                <li>Membawa kartu tanda pengenal seperti: Kartu Keluarga atau Kartu Penunjukan Suami / Istri bagi peserta keluarga, dan Kartu Data Penerima Pensiun bagi Purnawirawan / Pensiunan PNS TNI</li>
                <li>Bagi peserta keluarga / Purnawirawan / Pensiunan PNS TNI</li>
              </ul>
            </p>
          </div>
      </div>
      </div>
    </section>
@stop
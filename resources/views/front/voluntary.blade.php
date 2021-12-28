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
      <div class="row mb-5 pb-5">
          <div class="heading-section ftco-animate">
            <h2 class="mb-3">Voluntary Counselling and Testing</h2>
            <p><strong>Adalah kegiatan konseling yang menyediakan sarana :</strong></p>
            <p>
              <ol>
                <li>Melakukan testing HIV / AIDS</li>
                <li>Dukungan psikologi bagi ODHA dan keluarganya</li>
                <li>Informasi dan pengetahuan HIV / AIDS</li>
                <li>Mencegah penularan HIV</li>
                <li>Mempromosikan perubahan perilaku yang bertanggung jawab</li>
                <li>Membantu pemecahan masalah terkait dengan HIV / AIDS</li>
                <li>Pengobatan ARV dan Infeksi Oportunistik</li>
              </ol>
            </p>
            <div class="row justify-content-center" >
            <p style="text-align: center;">
              <strong>Informasi :</strong><br>
              Poli VCT di Gedung URJ B Lantai 3 <br>
              Telp . (021) 5703081 – 82 Ext. 359
            </p>
            </div>
          </div>
      </div>
      </div>
    </section>
@stop
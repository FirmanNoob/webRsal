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
            <h2 class="mb-3">Unit Sterilisasi Sentral</h2>
            <img src="{{ asset('images/ss.png')}}" class="d-flex mx-auto" alt="">
            <p>Melayani kebutuhan akan instrumen/bahan steril yang digunakan untuk berbagai tindakan medis, penunjang medis, asuhan keperawatan dan lain lain serta bertanggung jawab atas pengadaan penyimpanan dan pendistribusian.</p>
            <p>Pelayanan unit sterilisasi sentral Rumah Sakit TNI AL Dr. Mintohardjo meliputi kepentingan internal RSAL berupa pemenuhan alat instrumen steril, bahan steril guna menunjang kelancaran operasional Rumah Sakit antara lain : Kamar Operasi, UGD, ICU, rawat Inap, Poliklinik, penunjang medik dan ruang bayi.</p>
            <p>Proses sterilisasi Rumah Sakit TNI AL Dr. Mintohardjo menggunakan metode sterilisasi panas kering.</p>
            <p style="text-align:center" class="mt-5">
            <strong>Informasi</strong> <br>
            Telp : (021)5703081-85. ext.322/323.  
          </p>
          </div>
      </div>
      </div>
    </section>
@stop
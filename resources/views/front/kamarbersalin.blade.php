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
            <h2 class="mb-3">Pelayanan Kamar Bersalin</h2>
            <img src="{{ asset('images/baby1.png')}}" alt="">
            <img src="{{ asset('images/baby2.png')}}" alt="">
            <img src="{{ asset('images/baby3.png')}}" alt="">
            <p><strong>Pelayanan kamar bersalin Rumah Sakit Angkatan Laut Dr. Mintohardjo Jakarta meliputi :</strong></p>
            <p>
              <ol>
                <li>Pertolongan persalinan baik normal maupun dengan penyulit</li>
                <li>Pemeriksaan penunjang diagnostik</li>
                <li>Tindakan medis yang bersifat diagnostik, terapi dan operatif</li>
                <li>Ruang Observasi, ruang bersalin, ruang tindakan untuk USG, Kuret, hyndrotubasi serta resusitasi</li>
                <li>Pelayanan darah</li>
                <li>Pelayanan Obat</li>
                <li>Ruang persiapan dan ruanag observasi pasca tindakan</li>
                <li>Penyuluhan Gizi dan ASI</li>
                <li>Pemeriksaan CTG ( Cardio Toco Grafi)</li>
                <li>Laparascopy MOW</li>
              </ol>
            </p>
            <p style="text-align: center;">
            <strong>Informasi</strong><br>
            <strong>Lokasi : Kamar Bersalin (VK)</strong><br>
            Telp : (021)5703081-85 Ext.150
            </p>
          </div>
      </div>
      </div>
    </section>
@stop
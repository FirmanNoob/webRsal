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
            <h2 class="mb-3">Audiometri</h2>
            <p>Audiometri adalah pemeriksaan yang bertujuan untuk mengetahui tingkat/ambang batas pendengaran seseorang dan jenis gangguannya bila ada. Pemeriksaan dilakukan dengan memakai alat audiogram nada murni di dalam ruang kedap suara.</p>
            <p>Prinsip pemeriksaannya adalah bermacam-macam frekuensi dan intensitas suara (dB) ditransfer melalui headset atau bone conducter ke telinga atau mastoid dan batasan intensitas suara (dB) pasien yang tidak dapat didengar lagi dicatat, melalui program computer atau diplot secara manual pada kertas grafik.</p>
            <p>
              <strong>Kegunaan audiometri  :</strong>
              <br>
              <ol>
                <li>untuk mengetahui derajat ketulian ringan, sedang atau berat</li>
                <li>untuk mengetahui jenis tuli konduktif, tuli syaraf (sensorineural) atau tuli campuran</li>
              </ol>
            </p>
            <p>
              <strong>Indikasi pemeriksaan :</strong>
              <ol>
                <li>Adanya penurunan pendengaran</li>
                <li>Telinga berbunyi dengung (tinitus)</li>
                <li>Rasa penuh di telinga</li>
                <li>Riwayat keluar cairan</li>
                <li>Riwayat terpajan bising</li>
                <li>Riwayat trauma</li>
                <li>Riwayat pemakaian obat ototoksik</li>
                <li>Riwayat gangguan pendengaran pada keluarga</li>
                <li>Gangguan keseimbangan</li>
              </ol>
            </p>
            <p>
              <strong>Derajat parameter ketulian :</strong>
              <ul>
                <li>Tuli ringan             : 26-40 dB</li>
                <li>Tuli sedang             : 41-60 dB</li>
                <li>Tuli berat              : 61 – 90 dB</li>
                <li>Tuli sangat berat       : > 90 dB</li>
              </ul>
            </p>
            <p>Pelaporan hasil berupa ambang dengar normal, ambang dengar dengan tuli konduktif, ambang dengar dengan tuli sensorineural, ambang dengar tuli campuran</p>
          </div>
      </div>
      </div>
    </section>
@stop
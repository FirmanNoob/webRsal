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
            <h2 class="mb-3">Pelayanan Rohani</h2>
            <img src="{{ asset('images/pemulsaran-290x300.png')}}" class="d-flex mx-auto" alt="">
            <p>Rumah Sakit TNI AL Dr Mintohardjo menyelenggarakan :</p>
            <p>Perawatan jenazah antara lain :
                <br>
                <ol>
                    <li>Memandikan/ membersihkan jenazah muslim, non muslim, laki-laki, perempuan, anak-anak dan bayi.</li>
                    <li>Mengkafani/ membungkus/ memakaikan baju jenazah.</li>
                    <li>Menyolatkan jenazah.</li>
                    <li>Pengawetan/ formalinisasi</li>
                    <li>Penyediaan peti jenazah, semua ukuran dan kualitas.</li>
                    <li>Penyediaan peralatan jenazah.</li>
                    <li>Pelayanan angkutan jenazah (Kereta Merta) 24 jam untuk dalam dan luar kota.</li>
                    <li>Pengiriman jenazah lewat pesawat terbang (kargo)</li>
                </ol>
            </p>
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
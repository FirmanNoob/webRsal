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
            <h2 class="mb-3">Costumer Service</h2>
            <img src="{{ asset('images/ambulance-300x112.png')}}" class="d-flex mx-auto" alt="">
            <p>Fasilitas pelayanan ambulance Rumah Sakit TNI AL Dr. Mintohardjo memberikan pelayanan :</p>
            <p>
                <ol>
                    <li>Pelayanan untuk pasien rujukan</li>
                    <li>Pelayanan untuk pasien, tindakan ke rumah sakit tujuan</li>
                    <li>Pelayanan untuk pasien, evakuasi kasus gawat darurat</li>
                    <li>Pelayanan untuk pasien, menjemput / mengantar pasien pulang dalam dan luar kota.</li>
                    <li>Dukungan kesehatan untuk latihan, olahraga, pagelaran serta bencana.</li>
                </ol>
            </p>
            <p><strong>Cara Pemesanan Kendaraan Ambulance :</strong></p>
            <p>
                <ol>
                    <li>Anda bisa menghubungi petugas jaga ruangan, dimana anda dirawat.</li>
                    <li>Berikan keterangan kepada petugas jaga, waktu dan kemana tujuan.</li>
                    <li>Petugas jaga akan menghubungi Unit Gawat Darurat untuk memesan ambulance yang anda inginkan.</li>
                    <li>Biaya ambulance akan dikenakan kepada anda sesuai tarif yang berlaku.</li>
                </ol>
            </p>
            <p><strong>Armada Ambulance</strong><br>
            Jumlah kendaraan ambulance Rumah Sakit TNI AL Dr, Mintohardjo berjumlah 5 unit dengan rincian 2 unit ambulance VIP dan 3 unit ambulance non VIP.
            </p>
            <p class="mt-5" style="text-align: center;">
            <strong>Informasi</strong><br>
              <strong> RS TNI AL Dr.MINTOHARJDO</strong>
                <br>
                Direct : (021) 5721390<br>
                Telp : (021)5703081-85 Ext.143/179<br>
            </p>
          </div>
      </div>
      </div>
    </section>
@stop
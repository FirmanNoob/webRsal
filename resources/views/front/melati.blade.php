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
        <p class="mb-3"><strong> Pelayanan Krisis Terpadu "Melati"</strong></p>
      <div class="row justify-content-center mb-5 pb-5">
          <div class="heading-section ftco-animate">
            <img src="{{ asset('images/pkt.png')}}" alt="">
            <img src="{{ asset('images/pkt1-206x300.png')}}"  alt="">
          </div>
        </div>
        <p class="mt-4">Memberikan pelayanan kesehatan dalam bidang medis psikologis bagi perempuan dan anak, akibat:</p>
            <p>
              <ol>
                <li>Korban kekerasan dalam rumah tangga.</li>
                <li>Korban perkosaan.</li>
                <li>Korban kekerasan terhadap anak :
                  <ol>
                    <li>Kekerasan Fisik</li>
                    <li>Kekerasan Mental</li>
                    <li>Kekerasan Seksual</li>
                    <li>Penelantaran</li>
                  </ol>
                </li>
              </ol>
            </p>
            <p><strong>Jasa pelayanan Pusat Krisis Terpadu meliputi :</strong></p>
            <p>
              <ol>
                <li>Layanan Medis :
                  <ul>
                    <li>Fisik dan Mental</li>
                  </ul>
                </li>
                <li>Layanan Medikolegal :
                  <ul>
                    <li>Laboratorium
                      <ol>
                        <li>Visum et repertum</li>
                        <li>Dokumentasi</li>
                      </ol>
                    </li>
                  </ul>
                </li>
                <li>Analisis dan konseling</li>
              </ol>
            </p>
            <p class="mt-5" style="text-align: center;">
              <strong> RS TNI AL Dr.MINTOHARJDO</strong>
                <br>
                Jl.Bendungan Hilir No.17 <br>
                Jakarta - Indonesia <br>
                Telp/Fax 021-5732221 <br>
                Telp 021-5703081 Ext.176
            </p>
      </div>
      </div>
    </section>
@stop
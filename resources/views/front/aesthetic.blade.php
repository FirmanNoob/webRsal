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
            <img src="{{ asset('images/aesthetic1.png')}}" class="d-flex mx-auto" alt="">
            <p class="mt-4">Aesthetic Center Rumah Sakit angkatan laut Dr. Mintohardjo memberikan pelayanan “One Stop Service” untuk berbagai penyakit kulit pada umumnya dan menjaga kesehatan kulit dengan pengobatan dari luar serta melakukan proses peremajaan kulit. Dalam pelayanannya aestethic center terintegrasi dengan berbagai dokter spesialis kulit dan kelamin, bedah plastik, Hyperbarick, kebidanan dan kandungan, penyakit dalam, bedah mulut dan Orthodentish serta saraf.</p>
          <p>Aesthetic Center melayani dan menyediakan perawat untuk anda yang ingin menjaga kebugaran, kecantikan, dan penampilan yang menarik.</p>
          <p>Pelayanan Aesthetic Center selalu sesuai dengan perkembangan ilmu pengetahuan dan tuntutan zaman.</p>
          <p><strong>Pelayanan Aesthetic Center meliputi :</strong>
          <br>
          <ol>
            <li>Facial Treatment</li>
            <li>Skin Rejuvenation</li>
            <li>Chemical Peeling</li>
            <li>Botox</li>
            <li>Augmention / Filler</li>
            <li>Mesotherapy</li>
            <li>Breast Lift</li>
            <li>Liposuction</li>
            <li>Face and Body Implant</li>
            <li>Breast surgery</li>
            <li>Vaginoplasty</li>
            <li>Hormon Replacement Therapy</li>
            <li>Bepharoplasty</li>
            <li>Dental Aesthetic</li>
            <li>Hyperbaric Chamber Therapy</li>
            <li>LHE (Light Heat Energy)</li>
            <li>Microdermabrasion</li>
            <li>Hair Treatment</li>
            <li>Membuat lipatan mata</li>
            <li>Serdev’s Surgery</li>
            <li>Perawatan Kulit Bermasalah</li>
            <li>Perawatan Kulit Normal</li>
            <li>Perawatan Kulit Menu</li>
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
      </div>
    </section>
@stop
@extends('layouts1.master')

@section('content')
<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/halamandepan.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Home</a></span> <span>Alur Pendaftaran</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Alur Pendaftaran</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
            <div class="row d-md-flex">
                <img src="{{secure_asset('images/alurpendaftaran1size.jpg')}}" class="col-md-6 ftco-animate img about-image order-md-last" width="757" alt="">
                <img src="{{secure_asset('images/alurpendaftaran2.jpg')}}" class="col-md-6 ftco-animate img about-image order-md-last" width="757" alt="">
                <img src="{{secure_asset('images/alurpendaftaran3.jpg')}}" class="col-md-6 ftco-animate img about-image order-md-last mt-3 mx-auto d-block" width="757" alt="">
            </div>
        </div>
    </section>
@stop
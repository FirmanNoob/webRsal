@extends('layouts1.master')

@section('content')
<div class="content-wrapper">
<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/halamandepan.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Home</a></span> <span>Sejarah</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Sejarah</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <section class="ftco-section-2">
    	<div class="container-wrap">
      	<div class="row d-flex no-gutters">
              <img src="/images/dokter/{{ $dokter->gambar}}" class="col-md-6 img" alt="">
      		<!-- </div> -->
      		<div class="col-md-6 d-flex">
      			<div class="about-wrap">
      				<div class="heading-section heading-section-white mb-5 ftco-animate fadeInUp ftco-animated">
		            <h2 class="mb-2">Jadwal Dokter</h2>
		          </div>
                  <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jadwal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($dokter->days as $hari)
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$hari->hari}}
                          @foreach($dokter->join as $jadwal)
                            {{$jadwal->from}}
                          @endforeach
                        </td>
                        @endforeach
                        </tr>
                    </tbody>
                    </table>
      			</div>
      		</div>
      	</div>
      </div>
    </section>
    </section>
</div>
@stop
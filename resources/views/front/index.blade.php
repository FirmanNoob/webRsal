@extends('layouts1.master')

@section('content')
<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/Slider.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Alur Pelayanan Pasien</h1>
              <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Alur Pelayanan Pasien</p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/Jadwal.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Jadwal Pelayanan Dokter</h1>
              <p class="mb-4">Jadwal Dokter Rsal dr.Mintoharjdo</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-3 color-1 p-4">
    				<h3 class="mb-4">Emergency Cases</h3>
    				<p>Memberikan pelayanan untuk pasien pengunjung yang memerlukan informasi mengenai pelayanan rumah sakit</p>
    				<span class="phone-number">Telp. 021-5703081-90</span>
    			</div>
    			<div class="col-md-3 color-2 p-4">
    				<h3 class="mb-4">Opening Hours</h3>
    				<p class="openinghours d-flex">
    					<span>Monday - Friday</span>
    					<span>1:00 - 24:00</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>Saturday</span>
    					<span>1:00 - 24:00</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>Sunday</span>
    					<span>1:00 - 24:00</span>
    				</p>
    			</div>
    			<div class="col-md-6 color-3 p-4">
    				<h3 class="mb-2">Make an Appointment</h3>
    				<form action="#" class="appointment-form">
	            <div class="row">
	            	<div class="col-sm-4">
	                <div class="form-group">
			              <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                      	<option value="">Department</option>
                        <option value="">Teeth Whitening</option>
                        <option value="">Teeth CLeaning</option>
                        <option value="">Quality Brackets</option>
                        <option value="">Modern Anesthetic</option>
                      </select>
                    </div>
			            </div>
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-user"></span></div>
			              <input type="text" class="form-control" id="appointment_name" placeholder="Name">
			            </div>
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-paper-plane"></span></div>
			              <input type="text" class="form-control" id="appointment_email" placeholder="Email">
			            </div>
	              </div>
	            </div>
	            <div class="row">
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="ion-ios-calendar"></span></div>
	                  <input type="text" class="form-control appointment_date" placeholder="Date">
	                </div>    
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="ion-ios-clock"></span></div>
	                  <input type="text" class="form-control appointment_time" placeholder="Time">
	                </div>
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-phone2"></span></div>
	                  <input type="text" class="form-control" id="phone" placeholder="Phone">
	                </div>
	              </div>
	            </div>
	            
	            <div class="form-group">
	              <input type="submit" value="Make an Appointment" class="btn btn-primary">
	            </div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>
  
    <section class="ftco-section ftco-services">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Fasilitas Unggulan</h2>
            <p>Layanan unggulan yang tersedia di RSAL dr.Mintoharjdo</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/baric.jpg);width: 190px;height:225"></div>
      				<div class="info text-center">
                <h3>Hyperbaric Center</h3>
      					<div class="text">
	        				<p>Terapi Hyperbaric Center adalah bentuk terapi medis dengan dasar ilmu kedokteran yang terbukti secara klinis. Terapi dilakukan dengan cara pemberian oksigen murni kepada peserta terapi hiperbarik yang berada di dalam ruangan bertekanan tinggi, dengan tujuan meningkatkan kadar oksigen dalam darah, plasma dan jaringan.</p>
	        			</div>
                <h3><a href="#" class="text-primary">Selengkapnya <i class="fas fa-arrow-right"></i></a></h3>
      				</div>
            </div>
        	</div>
          <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/angiografi.png);width: 190px;height:225"></div>
      				<div class="info text-center">
                <h3>Angiografi (Cathlab)</h3>
      					<div class="text">
	        				<p>Kateterisasi jantung (termasuk angiografi) adalah suatu tindakan yg dilakukan di laboratorium kateterisasi jantung guna menentukan diagnostis penyakit jantung & pembuluh darah, selanjutnya dilakukan intervensi non bedah sesuai indikasi melalui pembuluh darah dengan menggunakan kateter.</p>
	        			</div>
                <h3><a href="#" class="text-primary">Selengkapnya <i class="fas fa-arrow-right"></i></a></h3>
      				</div>
            </div>
        	</div>
          <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/aesthetic.png);width: 190px;height:225"></div>
      				<div class="info text-center">
                <h3>Aesthetic Center</h3>
      					<div class="text">
	        				<p>Aesthetic Center memberikan pelayanan “One Stop Service” untuk berbagai penyakit kulit pada umumnya dan menjaga kesehatan kulit dengan pengobatan dari luar serta melakukan proses peremajaan kulit</p>
	        			</div>
                <h3><a href="#" class="text-primary">Selengkapnya <i class="fas fa-arrow-right"></i></a></h3>
      				</div>
            </div>
        	</div>
          <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/medicalcheckup.png);width: 190px;height:225"></div>
      				<div class="info text-center">
                <h3>Medical Check-Up</h3>
      					<div class="text">
	        				<p>Medical Check Up memberikan pelayanan uji pemeriksaan kesehatan yang lengkap dan terpadu. Paket medical check up dirancang oleh dokter spesialis dengan memperhatikan kebutuhan masyarakat.</p>
	        			</div>
                <h3><a href="#" class="text-primary">Selengkapnya <i class="fas fa-arrow-right"></i></a></h3>
      				</div>
            </div>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col-md-3 aside-stretch py-5">
    				<div class=" heading-section heading-section-white ftco-animate pr-md-4">
	            <h2 class="mb-3">Achievements</h2>
	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	          </div>
    			</div>
    			<div class="col-md-9 py-5 pl-md-5">
		    		<div class="row">
						@php
						$data =	\App\Dokter::all()->count()
						@endphp
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="{{ $data }}">0</strong>
		                <span>Jumlah Dokter</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
	      </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Our Best Pricing</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
    		<div class="row">
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Basic</h3>
	        			<p><span class="price">$24.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Diagnostic Services</li>
								<li>Professional Consultation</li>
								<li>Tooth Implants</li>
								<li>Surgical Extractions</li>
								<li>Teeth Whitening</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Standard</h3>
	        			<p><span class="price">$34.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Diagnostic Services</li>
								<li>Professional Consultation</li>
								<li>Tooth Implants</li>
								<li>Surgical Extractions</li>
								<li>Teeth Whitening</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry active pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Premium</h3>
	        			<p><span class="price">$54.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Diagnostic Services</li>
								<li>Professional Consultation</li>
								<li>Tooth Implants</li>
								<li>Surgical Extractions</li>
								<li>Teeth Whitening</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Platinum</h3>
	        			<p><span class="price">$89.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Diagnostic Services</li>
								<li>Professional Consultation</li>
								<li>Tooth Implants</li>
								<li>Surgical Extractions</li>
								<li>Teeth Whitening</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

		<section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Testimony</h2>
            <span class="subheading">Our Happy Customer Says</span>
          </div>
        </div>
        <div class="row justify-content-center ftco-animate">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">System Analytics</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Latest Blog</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
        <div class="row">
			@foreach($artikel as $a)
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20">
				  <img src="{{ asset('images/'.$a->gambar) }}" alt="" width="500px" height="500px">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">{{ $a->created_at->diffForHumans() }}</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="{{ route('artikel.detail',$a->judul) }}">{{ $a->judul}}</a></h3>
	              </div>
              </div>
            </div>
          </div>
		  @endforeach
          <a href="/blog">Selengkapnya</a>
        </div>
      </div>
    </section>
		
    @stop
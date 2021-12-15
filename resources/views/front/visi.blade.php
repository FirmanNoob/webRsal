@extends('layouts1.master')

@section('content')
    <section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span> <span>Visi & Misi</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Visi & Misi</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url(images/about.jpg);">
	    		</div>
	    		<div class="col-md-6 ftco-animate pr-md-5 order-md-first">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">Visi</a>

		              <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Misi</a>

		              <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Tujuan</a>

		              <a class="nav-link" id="v-pills-bus-tab" data-toggle="pill" href="#v-bus-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Falsafah</a>

		              <a class="nav-link" id="v-pills-bis-tab" data-toggle="pill" href="#v-bis-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Motto</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
		              	<div>
			                <h2 class="mb-4">Rumah Sakit Angkatan Laut dr.Mintohardjo</h2>
			              	<p>Memberikan pelayanan yang prima dan menentramkan bagi pasien dan keluarga pasien merupakan tekad dan komitmen seluruh jajaran Rumkital dr.Mintohardjo. Oleh karena itu berbagai usaha yang terpadu untuk pelayanan yang berorientasi pada perwujudan komitmen terus diupayakan secara berkesinambungan. Peningkatan mutu pelayanan rumah sakit, jenis pelayanan kesehatan, peralatan kesehatan dengan teknologi modern, pengembangan sistem komputer terpadu serta peningkatan profesionalisme seluruh jajaran personal rumah sakit terus dikembangkan dengan pengelolaan manajemen profesional. Kami menyadari selain peningkatan pelayanan kesehatan, tersedianya informasi rumah sakit yang lengkap, terpadu, terkini dan jelas tentang keadaan dan sistem pelayanan rumah sakit merupakan salah satu layanan informasi yang diperlukan. Oleh karena itu dengan ini kami meluncurkan website ini, yang memuat gambaran dan sistem pelayanan rumah sakit sebagai informasi yang perlu dan diperlukan oleh prajurit, PNS TNI AL dan keluarga serta masyarakat umum. Akhirnya kami mengucapkan terima kasih dan penghargaan yang setinggi tingginya kepada berbagai pihak yang telah membantu proses terbuatnya website ini, semoga dapat berguna secara tepat bagi yang memanfaatkan fasilitas pelayanan kesehatan Rumkital dr. Mintohardjo.</p>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
		                <div>
			                <h2 class="mb-4">Rumah Sakit Angkatan Laut dr.Mintohardjo</h2>
			              	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
		                <div>
			                <h2 class="mb-4">Rumah Sakit Angkatan Laut dr.Mintohardjo</h2>
			              	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
				            </div>
		              </div>
		              <div class="tab-pane fade" id="v-pills-bus" role="tabpanel" aria-labelledby="v-pills-bus-tab">
		                <div>
			                <h2 class="mb-4">Rumah Sakit Angkatan Laut dr.Mintohardjo</h2>
			              	<p> MELAYANI DENGAN AMANAH, NIAT MULIA, HATI IKHLAS DAN SENYUM</p>
				            </div>
		              </div>
		              <div class="tab-pane fade" id="v-pills-bis" role="tabpanel" aria-labelledby="v-pills-bis-tab">
		                <div>
			                <h2 class="mb-4">Rumah Sakit Angkatan Laut dr.Mintohardjo</h2>
			              	<p>LEBIH PEDULI DAN TERPERCAYA</p>
				            </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

  
@stop
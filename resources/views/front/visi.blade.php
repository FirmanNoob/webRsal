@extends('layouts1.master')

@section('content')
    <section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/halamandepan.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Home</a></span> <span>Visi & Misi</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Visi & Misi</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<!-- <div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url(images/about.jpg);"> -->
	    		</div>
	    		<div class="col-md-12 ftco-animate pr-md-5 order-md-first">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">Visi & Misi</a>

		              <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Tujuan</a>

		              <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Falsafah & Motto</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
		              	<div>
			                <h2 class="mb-4 text-danger">Visi</h2>
							<p>MENJADI RUMAH SAKIT TNI ANGKATAN LAUT WILAYAH BARAT YANG UNGGUL DALAM DUKUNGAN KESEHATAN, PELAYANAN KESEHATAN, PENDIDIKAN DAN PENELITIAN TERUTAMA KESEHATAN MATRA LAUT.</p>
							<h2 class="mb-4 text-danger">Misi</h2>
							<strong>1. MENYELENGGARAKAN DUKUNGAN KESEHATAN DAN PELAYANAN KESEHATAN TERPADU YANG BERMUTU DENGAN MENGUTAMAKAN KESELAMATAN PASIEN.</strong>
							<br>
							<strong>2. MENYELENGGARAKAN PELAYANAN RUJUKAN SEBAGAI PUSAT RUJUKAN TERTINGGI BAGI UNSUR KESEHATAN TNI ANGKATAN LAUT WILAYAH BARAT DAN FASILITAS KESEHATAN LAINNYA.</strong>
							<br>
							<strong>3. MELAKSANAKAN PENDIDIKAN DAN PENELITIAN TERUTAMA KESEHATAN MATRA LAUT.</strong>
							<br>
							<strong>4. MELAKSANAKAN KEGIATAN PENGABDIAN KEPADA MASYARAKAT.</strong>
							<br>
							<strong>5. MENGEMBANGKAN MANAJEMEN SUMBER DAYA MANUSIA (SDM) DAN PENATAAN KELEMBAGAAN RUMAH SAKIT YANG BERORIENTASI PADA MUTU.</strong>
						</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
		                <div>
			                <h2 class="mb-4 text-danger">Tujuan</h2>
			              	<strong>1. TERSELENGGARANYA TATA KELOLA DUKUNGAN KESEHATAN DAN PELAYANAN KESEHATAN YANG TERINTEGRASI, SERTA BERORIENTASI PADA PENDIDIKAN TERUTAMA KESEHATAN MATRA LAUT YANG BERBASIS RISET.</strong>
							<br>
			                <strong>2. TERWUJUDNYA ALUMNI YANG PROFESIONAL, KOMPETEN, MEMILIKI INTEGRITAS TINGGI, SERTA BERSIKAP TERBUKA TERHADAP PERKEMBANGAN ILMU PENGETAHUAN DAN TEKNOLOGI.</strong>
							<br>
			                <strong>3. TERWUJUDNYA PENELITIAN INOVATIF YANG MENGACU KEPADA PENGEMBANGAN ILMU PENGETAHUAN DAN TEKNOLOGI TERUTAMA DI BIDANG KESEHATAN MATRA LAUT.</strong>
							<br>
			                <strong>4. TERWUJUDNYA PRODUK PENGABDIAN MASYARAKAT YANG BERORIENTASI PADA PEMBERDAYAAN MASYARAKAT.</strong>
							<br>
			                <strong>5. TERWUJUDNYA SUMBER DAYA MANUSIA (SDM) RUMKITAL Dr. MINTOHARDJO YANG PROFESIONAL, AKUNTABEL YANG BERORIENTASI PADA KEPUASAN ANGGOTA DAN KELUARGA TNI, TNI ANGKATAN LAUT SERTA SELURUH LAPISAN MASYARAKAT.</strong>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
		                <div>
			                <h2 class="mb-4 text-danger">Falsafah</h2>
							<p>MELAYANI DENGAN AMANAH, NIAT MULIA, HATI IKHLAS DAN SENYUM</p>
			                <h2 class="mb-4 text-danger">Motto</h2>
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
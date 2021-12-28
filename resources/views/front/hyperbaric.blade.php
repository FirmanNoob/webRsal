@extends('layouts1.master')

@section('content')
<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/halamandepan.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Home</a></span> <span>Hyperbaric</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Hyperbaric Center</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <div class="container">
      <div class="row justify-content-center mb-1 pb-5">
          <div class="heading-section ftco-animate">
            <p class="mb-3"><strong>TERAPI OKSIGEN HIPERBARIK</strong></p>
            <p>RS TNI AL dr. Mintohardjo memperkenalkan kepada masyarakat umum dan sejawat dokter tentang tersedianya fasilitas Terapi Oksigen Hiperbarik di rumah sakit kami.</p>
            <img src="{{ asset('images/hiperbarik1.png')}}" class="d-flex mx-auto" alt="">
            <p><strong>Apakah Terapi Oksigen Hiperbarik itu?</strong></p>
            <p>Terapi Oksigen Hiperbarik adalah suatu cara pengobatan dimana peserta terapi bernafas dengan menghirup Oksigen murni (100%) di dalam Ruang Udara Bertekanan Tinggi lebih dari 1 Atmosfer Absolut. Terapi OHB merupakan terapi utama pada penyakit penyelaman dan  terapi tambahan pada berbagai penyakit klinis. Oksigen sangat diperlukan oleh mahluk hidup agar seluruh organ tubuhnya dapat berfungsi normal dan tetap sehat.</p>
            <p>Oksigen Hiperbarik merupakan metode terapi yang dapat dipertanggungjawabkan  secara ilmiah dan didukung berbagai hasil penelitian (Evidence Base Medicine).</p>
            <img src="{{ asset('images/Ruang-Hiperbarik-768x576.jpg')}}" class="d-flex mx-auto" width="397" height="298" alt="">
            <p>
              <strong>Manfaat Terapi Oksigen Hiperbarik</strong>
            </p>
            <p><strong>Pengobatan Utama</strong></p>
            <p>
              <ol>
                <li>Penyakit  penyelaman (Decompression Sickness dan Emboli Gas Arteri)</li>
                <li>Keracunan gas (CO, HCN, H2S)
                  <ul>
                    <li>Mempercepat pelepasan gas beracun</li>
                    <li>Meningkatkan kadar Oksigen sehingga kebutuhan seluruh sel tubuh akan terpenuhi</li>
                  </ul>
                </li>
              </ol>
            </p>
            <p> <strong>Manfaat Klinis</strong> </p>
            <p>
              <ol>
                <li>Luka yang sulit sembuh seperti luka pada penderita kencing manis, luka terinfeksi, gas gangren, infeksi tulang, crush injury, compartment syndrome, luka bakar, luka pasca operasi dan transplantasi
                  <ul>
                    <li>Meningkatkan sistem pertahanan tubuh untuk mengatasi infeksi</li>
                    <li>Pembentukan cabang-cabang pembuluh darah baru untuk mengatasi penyumbatan dan kerusakan pembuluh darah</li>
                  </ul>
                </li>
                <li>Kencing manis</li>
                <li>Gangguan saraf seperti stroke dan neuropati</li>
                <li>Gangguan telinga seperti tuli mendadak dan telinga berdenging.</li>
                <li>Gangguan keseimbangan seperti vertigo</li>
                <li>Penyempitan pembuluh darah mata</li>
                <li>Gangguan saluran cerna seperti tukak lambung</li>
                <li>Mengatasi infeksi Jamur</li>
                <li>Alergi</li>
              </ol>
            </p>
            <p><strong>Meningkatkan Kebugaran</strong></p>
            <p>Pada dekade terakhir terbukti bermanfaat untuk meningkatkan kebugaran dan kecantikan
              <br>* Meningkatkan kadar Oksigen seluruh tubuh
              <br>* Mempercepat recovery pada kelelahan fisik dan meningkatkan kebugaran
              <br>* Meningkatkan pembentukan jaringan kolagen untuk kelenturan & kecantikan kulit
              <br>* Memperbaiki pola tidur
            </p>
            <p><Strong>Jadwal Terapi Oksigen Hiperbarik</Strong></p>
            <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Sesi I
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      06.30 – 08.30 WIB
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Sesi II
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      08.30 – 10.30 WIB
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Sesi III
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      10.30 – 12.30 WIB
      </div>
    </div>
  </div>
</div>
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
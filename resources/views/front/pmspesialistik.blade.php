@extends('layouts1.master')

@section('content')
<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/halamandepan.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Home</a></span> <span>dokter</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Pelayanan Medis Spesialistik</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Meet Our Experience Dentist</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p>
          </div>
      </div>
      <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Poliklinik Akupuntur
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/akupuntur2.png')}}" width="157" height="264" alt="">
          <img src="{{ asset('images/akupuntur.png')}}" width="157" height="203" alt="">
          <p class="mt-2">
              <strong>Akupuntur</strong> adalah suatu cara pengobatan dengan cara perangsangan pada titik-titik tertentu atau disebut titik akupuntur dipermukaan tubuh untuk menyembuhkan suatu penyakit. Perangsangan itu dilakukan melalui penusukan jarum, pemijatan atau penyinaran dan sebagainya.
          </p>
          <p>
              <Strong>Pelayanan akupuntur RSAL Dr. Mintohardjo meliputi :</Strong>
          </p>
          <ol>
              <li>Akupuntur Kesehatan.
              <ul>
                  <li>Pengobatan keadaan nyeri-nyeri pada kepala/migran, nyeri bahu, lutut, pinggang dan nyeri herpes.</li>
              </ul>
              </li>
              <li>
              Akupuntur Gangguan Fungsional
              <ul>
                  <li>Asma, Alergi, susah tidur, dan mual pada kehamilan, pengobatan kelainan saraf, kelumpuhan muka, kelumpuhan anggota gerak dan kesemutan.
                </li>
              </ul>
              </li>
              <li>
              Akupuntur Kosmetik
              <ul>
                  <li>Melangsingkan tubuh, mengencangkan kulit wajah, pengobatan jerawat dan menghilangkan keriput halus.</li>
              </ul>
              </li>
              <li>Akupuntur Olahraga
                  <ul>
                      <li>Meningkatkan stamina tubuh dan ketangkasan</li>
                  </ul>
              </li>
              <li>
              Konsultasi Akupuntur
              </li>
          </ol>
          <p style="text-align: center;">
              <strong>Informasi</strong>
              <br>
              <strong>Lokasi : Gedung URJ A lantai 2</strong>
              <br>
              Telp : (021)5703081-85 Ext.142
          </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Poliklinik Alergi
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/alergi.png')}}" class="d-flex mx-auto" alt="">
          <ol>
              <li>Imunoterapi</li>
              <li>Alergi.</li>
              <li>Imunisasi Dewasa.</li>
              <li>Kelainan Sistem Kekebalan Tubuh.</li>
          </ol>
          <p style="text-align: center;">
              <strong>Informasi</strong>
              <br>
              <strong>Lokasi : Gedung URJ B lantai 3</strong>
              <br>
              Telp : (021)5703081-85 Ext.142
          </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Poliklinik Anak
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/poli-anak.png')}}" class="d-flex mx-auto" alt="">
          <ol>
              <li>Konsultasi.</li>
              <li>Tumbuh kembang.</li>
              <li>Perinatologi.</li>
              <li>Inhalasi.</li>
              <li>Imunisasi.</li>
          </ol>
          <p style="text-align: center;">
              <strong>Informasi</strong>
              <br>
              <strong>Lokasi : Gedung URJ A lantai 2</strong>
              <br>
              Telp : (021)5703081-85 Ext.142
          </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik Bedah
        </button>
      </h5>
    </div>
    <div id="demo" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/bedah.png')}}" class="d-flex mx-auto" alt="">
          <p>
              <strong>Pelayanan Bedah</strong>sebagai sarana layanan terpadu untuk tindakan operatif terencana maupun darurat dan diagnostik. Unit Bedah Sentral Rumkital Dr. Mintohardjo merupakan ruang operasi yang dilengkapi dengan peralatan canggih, ruang persiapan, dan ruang pulih sadar. Unit bedah sentral memiliki pelayanan bedah unggulan yaitu kemampuan minimal invasi surgery berupa laparoscopy dan antroscopy, unit bedah sentral dapat melayani beberapa tindakan pembedahan meliputi :
          </p>
          <p>A. Tindakan Operasi Bedah Umum</p>
          <p>B. Tindakan Operasi Bedah Orthopedi</p>
          <p>C. Tindakan Operasi Bedah Saraf</p>
          <p>D. Tindakan Operasi Bedah Plastik</p>
          <p>E. Tindakan Operasi Bedah Urologi</p>
          <p>F. Tindakan Operasi Bedah Onkologi</p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo1" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik BKIA dan Laktasi
        </button>
      </h5>
    </div>
    <div id="demo1" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/poliklinik-kia.png')}}" class="d-flex mx-auto" alt="">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo2" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik Gizi
        </button>
      </h5>
    </div>
    <div id="demo2" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/gizi.png')}}" class="d-flex mx-auto" alt="">
          <p>
Melayani konsultasi gizi bagi pasien rawat inap dan rawat jalan sebagai terapi gizi dalam membantu penyembuhan dan tercapainya berat badan ideal.
<br><strong>
Macam diet yang diberikan adalah :</strong>
          </p>
          <ul>
              <li>Diet Diabetes Melitus</li>
              <li>Diet Hati</li>
              <li>Diet Jantung</li>
              <li>Diet Lambung</li>
              <li>Diet Tinggi Kalori Protein</li>
              <li>Diet Rendah Kolestrol</li>
              <li>Diet Rendah Kalori</li>
              <li>Diet Rendah Protein</li>
              <li>Diet Rendah Garam</li>
              <li>Diet lain-lain.</li>
          </ul>
    <p>Melayani penyuluhan bagi pasien rawat inap dan pasien rawat jalan.
        <br>
Melayani konsultasi gizi, diberikan oleh ahli gizi yang berpengalaman.
    </p>
    <p style="text-align: center;">
              <strong>Informasi</strong>
              <br>
              <strong>Lokasi : Gedung URJ B lantai 3</strong>
              <br>
              Telp : (021)5703081-85 Ext.142
          </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo3" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik Jantung
        </button>
      </h5>
    </div>
    <div id="demo3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/jantung.png')}}" class="d-flex mx-auto" alt="">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo4" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik Kebidanan dan Kandungan
        </button>
      </h5>
    </div>
    <div id="demo4" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/kandungan1.png')}}" class="d-flex mx-auto" alt="">
          <ol>
              <li>Konsultasi.</li>
              <li>Ginekologi.</li>
              <li>Infertilitas.</li>
              <li>Endokrinologi.</li>
              <li>Fetamoternal.</li>
              <li>Farinatal Resiko Tinggi.</li>
              <li>Menopouse.</li>
              <li>Kolposkopi.</li>
              <li>Laparaskopi.</li>
          </ol>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo5" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik Keluarga Berencana
        </button>
      </h5>
    </div>
    <div id="demo5" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/poli-KB.png')}}" class="d-flex mx-auto" alt="">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo6" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik Kesehatan Gigi dan Mulut
        </button>
      </h5>
    </div>
    <div id="demo6" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/gigi.png')}}" class="d-flex mx-auto" alt="">
          <p>
          <ol>
              <li>Konsultasi</li>
              <li>Pemeriksaan</li>
              <li>Penambalan Gigi</li>
              <li>Perawatan Endodotie, Prosthudontie, Orthodontie</li>
              <li>Bedah Mulut Major</li>
              <li>Bedah Mulut Minor</li>
              <li>Bedah Mulut Prepostetik</li>
              <li>Dental Implant</li>
              <li>Bedah Endodontik</li>
              <li>Pencabutan gigi dewasa dan anak</li>
          </ol>
          </p>
          <p style="text-align: center;">
              <strong>Informasi</strong>
              <br>
              <strong>Lokasi : Gedung URJ B lantai 2</strong>
              <br>
              Telp : (021)5703081-85 Ext.142
          </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo7" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik Kulit dan Kelamin
        </button>
      </h5>
    </div>
    <div id="demo7" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/kulit.png')}}" class="d-flex mx-auto" alt="">
          <p>
              <ol>
                  <li>Kosmetelogi.</li>
                  <li>Dermatologi Umum.</li>
                  <li>Alergi/Immunologi.</li>
                  <li>Skin Care.</li>
                  <li>Penyakit Kulit Anak.</li>
                  <li>Merbus Hansen.</li>
                  <li>Penyakit Hubungan Seksual</li>
              </ol>
          </p>
          <p style="text-align: center;">
              <strong>Informasi</strong>
              <br>
              <strong>Lokasi : Gedung URJ B lantai 2</strong>
              <br>
              Telp : (021)5703081-85 Ext.142
          </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo8" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik Mata
        </button>
      </h5>
    </div>
    <div id="demo8" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/mata.png')}}" class="d-flex mx-auto" alt="">
          <p>
              <ol>
                  <li>Konsultasi.</li>
                  <li>Orbita dan Rekonstruksi.</li>
                  <li>Glaukoma.</li>
                  <li>Operasi Katarak.</li>
                  <li>Kelainan Kornea.</li>
                  <li>Opthalmologi.</li>
                  <li>Refreksi.</li>
                  <li>Phacoemul Sificasion.</li>
              </ol>
          </p>
          <p style="text-align: center;">
              <strong>Informasi</strong>
              <br>
              <strong>Lokasi : Gedung URJ B lantai 2</strong>
              <br>
              Telp : (021)5703081-85 Ext.142
          </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo9" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik Paru
        </button>
      </h5>
    </div>
    <div id="demo9" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/poli-paru.png')}}" class="d-flex mx-auto" alt="">
          <p>
              <ol>
                  <li>Konsultasi.</li>
                  <li>Onkologi Paru.</li>
                  <li>TTB.</li>
                  <li>Bronkoskopi.</li>
                  <li>Spirometri.</li>
                  <li>Penyakit Paru Obstruktif dan Asma.</li>
                  <li>Mediastinum dan Tumor ke Paru Metastis.</li>
                  <li>Penyakit Infek TB dan Jamur</li>
                  <li>Biopsi Pleura</li>
                  <li>Biopsi Jarum Halus</li>
              </ol>
          </p>
          <p style="text-align: center;">
              <strong>Informasi</strong>
              <br>
              <strong>Lokasi : Gedung URJ B lantai 1</strong>
              <br>
              Telp : (021)5703081-85 Ext.142
          </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo10" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik Penyakit Dalam
        </button>
      </h5>
    </div>
    <div id="demo10" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/poli-dlm.png')}}" class="d-flex mx-auto" alt="">
          <p>
              <ol>
                  <li>Konsultasi.</li>
                  <li>Metabolik Endokrin.</li>
                  <li>Hati dan Pencernaan.</li>
                  <li>Hematologi.</li>
                  <li>Ultrasonografi.</li>
                  <li>Endoskopi.</li>
                  <li>Kolonoskopi.</li>
                  <li>Haemodialisa.</li>
                  <li>Penatalaksanaan gagal ginjal</li>
                  <li>Pemasangan shiminoshunt dengan cara pemasangan doublelument.</li>
                  <li>Monitoring keseimbangan cairan</li>
                  <li>Haemodialisa</li>
              </ol>
          </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo11" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik Psikiatri dan Psikologi
        </button>
      </h5>
    </div>
    <div id="demo11" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/psikologi.png')}}" class="d-flex mx-auto" alt="">
          <p>
              <ol>
                  <li>Konsultasi.</li>
                  <li>Psikoterapi.</li>
                  <li>Psikiatri Anak dan Remaja.</li>
                  <li>Konseling Perkawinan.</li>
                  <li>Hipnoterapi.</li>
                  <li>Test Psikologi :
                      <ul>
                          <li>Tes Intelegensi</li>
                          <li>Test Minat dan Bakat</li>
                          <li>Test Kepribadian.</li>
                      </ul>
                  </li>
              </ol>
          </p>
          <p style="text-align: center;">
              <strong>Informasi</strong>
              <br>
              <strong>Lokasi : Gedung URJ B lantai 1</strong>
              <br>
              Telp : (021)5703081-85 Ext.142
          </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo12" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik Saraf
        </button>
      </h5>
    </div>
    <div id="demo12" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <p>
              <ol>
                  <li>Konsultasi.</li>
                  <li>Neuro Fisiologi.</li>
                  <li>EEG</li>
                  <li>EMG</li>
              </ol>
          </p>
          <p style="text-align: center;">
              <strong>Informasi</strong>
              <br>
              <strong>Lokasi : Gedung URJ B lantai 1</strong>
              <br>
              Telp : (021)5703081-85 Ext.142
          </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo13" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik THT
        </button>
      </h5>
    </div>
    <div id="demo13" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <img src="{{ asset('images/tht.png')}}" class="d-flex mx-auto" alt="">
          <p>
              <ol>
                  <li>Konsultasi.</li>
                  <li>Endoskopi.</li>
                  <li>Nada Murni.</li>
                  <li>Timpanometri</li>
                  <li>Audiometri.</li>
              </ol>
          </p>
          <p style="text-align: center;">
              <strong>Informasi</strong>
              <br>
              <strong>Lokasi : Gedung URJ B lantai 2</strong>
              <br>
              Telp : (021)5703081-85 Ext.142
          </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demo14" aria-expanded="false" aria-controls="collapseFour">
          Poliklinik Umum
        </button>
      </h5>
    </div>
    <div id="demo14" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <p>
              <ol>
                  <li>Konsultasi</li>
                  <li>Pasien Baru bagi Pasien Dinas</li>
                  <li>Pasien diluar spesialis/gawat darurat</li>
              </ol>
          </p>
          <p style="text-align: center;">
              <strong>Informasi</strong>
              <br>
              <strong>Lokasi : Gedung URJ B lantai 1</strong>
              <br>
              Telp : (021)5703081-85 Ext.142
          </p>
      </div>
    </div>
  </div>
</div>
      </div>
    </section>
    </div>
@stop
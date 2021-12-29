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
            <h2 class="mb-3">Pelayanan Rohani</h2>
            <img src="{{ asset('images/rohani1.png')}}" alt="">
            <img src="{{ asset('images/rohani2.png')}}"  alt="">
            <img src="{{ asset('images/rohani3.png')}}"  alt="">
            <img src="{{ asset('images/rohani4.png')}}"  alt="">
            <p>Suatu usaha bimbingan untuk mendampingi dan menemui pasien berobat rawat jalan maupun rawat inap, agar mampu memahami arti dan makna hidup sesuai dengan keyakinan dan agama yang dianut masing-masing.</p>
            <p>Pelayanan ini sangat berarti sebagai upaya meningkatkan rasa percaya diri kepada Tuhan Yang Maha Esa sebagai kekuatan yang menentukan kehidupan manusia, sehingga motivasi ini dapat menjadi pendorong dalam proses penyembuhan.
            </p>
            <p>Pelayanan bimbingan rohani dilakukan oleh Perwira Rohani (Paroh) dan Siaf Rumah Sakit TNI Angkatan laut Dr. Mintohardjo dengan menggunakan tanda pengenal khusus.</p>
            <p>Pelayanan bimbingan rohani dapat diselenggarakan atas permintaan pasien / keluarga pasien dengan menghubungi Bagian Pelayanan Bimbingan Rohani.</p>
            <p>Pelayanan bimbingan rohani diselenggarakan tidak hanya untuk pasien rumah sakit saja, melainkan juga untuk karyawan dengan jadwal kegiatan meliputi:</p>
            <p><strong>BIMBINGAN ROHANI ISLAM</strong>
            <br>
            Tugas pokok memberikan pelayanan kesehatan pada dinas TNI AL, anggota Prajurit dan PNS dengan fungsi pelayanan rohani pada anggota RSMTH dan pasien.
            <br>
            Adapun Kegiatan antara Lain:
            </p>
            <p>
                <strong>Kegiatan Internal:</strong>
                <br>
                <ol>
                    <li>Ceramah Agama Islam
                        <ul>
                            <li>Setiap hari Rabu, pukul 07.15 sd 08.15 Wib bertempat di Masjid Nurul B</li>
                        </ul>
                    </li>
                    <li>Pelayanan anggota untuk bimbingan Ibadah umroh atau haji.</li>
                    <li>Penyuluhan anggota memasuki masa pernikahan.</li>
                    <li>Konsultasi penyelesaian perselisihan anggota dengan keluarga.</li>
                    <li>Peringatan hari-hari besar Islam.</li>
                </ol>
            </p>
            <p><strong>
            Kegiatan Eksternal:
            </strong>
            <br>
            <ol>
                <li>Kunjungan pasien rawat inap 2 kali seminggu atas permintaan maupun tidak.</li>
                <li>Bantuan rohani pada pasien dengan upaya menciptakan suasana positif kepada pasien dan anggota keluarga.</li>
                <li>Kuliah Dzuhur hari Senin dan Kamis di Masjid Nurul B</li>
            </ol>
            </p>
            <img src="{{ asset('images/rohani6-300x199.png')}}" class="d-flex mx-auto" alt="">
            <p><strong>BIMBINGAN ROHANI KRISTEN</strong></p>
            <p>Tugas pokok memberikan pelayanan kesehatan pada dinas TNI AL, anggota Militer dan PNS dengan fungsi pelayanan rohani pada anggota RSMTH dan pasien.
                <br>
                Adapun kegiatan antara lain:
            </p>
            <p><strong>Kegiatan Internal:</strong>
                <br>
                <ol>
                    <li>Ceramah Agama Kristen
                        <ul>
                            <li>Setiap hari Rabu, pukul 07.15 sd 08.30 Wib</li>
                            <li>Bertempat di Lounge Room Rumkital Dr Mintohardjo dan gedung RUBT Lantai 2 (Hyperbaric Center)</li>
                            <li>Dengan tujuan untuk memberikan pencerahan melalui iman percaya kepada Tuhan Yang Maha Esa dan keyakinan teguh kepada Tuhan Yesus. Adapun penyampaian Pembawa Firman secara silih berganti dilakukan, baik dari Protestan maupun Katolik dari dalam RSMTH maupun dari luar RSMTH.</li>
                        </ul>
                    </li>
                    <li>Konseling pastoral, kunjungan dan pendamping rohani bagi pasien beragama Kristen Protestan dan Katolik.</li>
                    <li>Katekasasi Pranikah dan bimbingan melalui buku renungan harian.</li>
                    <li>Perjamuan Kudus setiap bulan pada minggu ke 1 kepada pasien Kristen Katolik.</li>
                    <li>Peringatan hari-hari Besar Kristen, seperti Natal dan Paskah.</li>
                </ol>
            </p>
            <img src="{{ asset('images/rohani-300x223.png')}}" class="d-flex mx-auto" alt="">
            <p><strong>BIMBINGAN ROHANI HINDU</strong>
                <br>
                Tugas pokok memberikan pelayanan kesehatan pada dinas TNI AL, anggota Militer dan PNS dengan fungsi pelayanan rohani pada anggota RSMTH dan pasien.
                <BR>Adapun Kegiatan antara lain:</BR>
            </p>
            <p><strong>Kegiatan Internal:</strong> 
            <br>
            <ol>
                <li>Ceramah Agama Hindu
                    <ul>
                        <li>Setiap hari Rabu, pukul 07.15 sd 08.15 Wib bertempat di ruang Bintal.</li>
                    </ul>
                </li>
                <li>Konseling kunjungan dan pendampingan bagi pasien beragama Hindu.</li>
                <li>Kunjungan / Tirta Yatra ke pure-pure yang ada di Jawa Timur dan Bali.</li>
            </ol>
            </p>
            <p class="mt-5" style="text-align: center;">
            <strong>Personalia Rumkital Dr Mintohardjo</strong><br>
              <strong> RS TNI AL Dr.MINTOHARJDO</strong>
                <br>
                Telp : (021) 5703081 – 85 <br>
                Direct: (021)5721390<br>
            </p>
          </div>
      </div>
      </div>
    </section>
@stop
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
            <h2 class="mb-3">Angiografi (Cathlab)</h2>
            <img src="{{ asset('images/angiografi (1).png')}}" class="d-flex mx-auto" alt="">
            <p>Sejak 21 Desember 2011 di Rumah Sakit TNI AL Dr Mintohardjo, telah tersedia fasilitas Laboratorium Kateterisasi Jantung / Cath Lab (Catheterization Laboratorium) guna menunjang kesehatan anggota TNI AL dan masyarakat umum. Kateterisasi jantung (termasuk angiografi) adalah suatu tindakan yang dilakukan di laboratorium kateterisasi jantung guna menentukan diagnostis penyakit jantung dan pembuluh darah, selanjutnya dilakukan intervensi non bedah sesuai indikasi melalui pembuluh darah dengan menggunakan kateter.</p>
            <p>Kegunaan alat Angiografi (Catheterisasi Jantung) antara lain :</p>
            <p>
              <ol>
                <li>Menegakkan Diagnosa
                  <br>
                  <ul>
                    <li>Kelainan jantung koroner</li>
                    <li>Kelainan jantung bawaan</li>
                    <li>Kelainan katup jantung</li>
                    <li>Kelainan pembuluh darah lainnya (pembuluh darah kaki, tangan, otak, dll)</li>
                  </ul>
                </li>
                <li>Tindakan Intervensi Non Bedah
                  <br>
                  <ul>
                    <li>PTCA (Balloon dan pemasangan ring /Stent)</li>
                    <li>Penutupan ASD dengan ASO</li>
                    <li>Penutupan PDA dengan ADO</li>
                    <li>Pelebaran katup mitral, aorta dan pulmonal (BMW, BAV dan BPV)</li>
                    <li>Pemasangan pacu jantung (Installing Pacemaker)</li>
                    <li>Temporary Pacemaker</li>
                    <li>Permanent Pacemaker</li>
                  </ul>
                </li>
                <li>Intervensi Radiologi
                <br>
                <p>Tenaga pelaksana yang mengawaki di Ruang Angiografi adalah para Dokter Spesialis Jantung dan Dokter Spesialis Radiologi yang sudah mengikuti pendidikan khusus, para medis yang memiliki sertifikat khusus, tenaga administrasi dan pekarya. Saat ini Ruang Angiografi Rumah Sakit TNI AL Dr Mintohardjo dikepalai oleh Kolonel Laut (K) dr. Tjatur Bagus Gunarto, SpJP.</p>
              </li>
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
@extends('layouts.master')
@section('title','Tambah Speciality')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Speciality</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Speciality</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Tambah Speciality</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <form action="{{ route('speciality.store')}}" method="POST">
              @method('POST')
              @csrf
          <!-- /.card-header -->
          <div class="card-body">
          <!-- Color Picker -->
          <div class="form-group">
                    <label for="exampleInputEmail1">Speciality</label>
                    <input type="text" name="speciality" class="form-control" placeholder="Masukan Categori" value="{{ old('speciality') }}">
                  </div>
            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
    </div>
</section>
</div>
@stop

@section('footer4')

<script src="{{ asset('template/plugins/select2/js/select2.full.min.js')}}"></script>
<script>//Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })</script>
@stop
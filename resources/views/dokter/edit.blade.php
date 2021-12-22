@extends('layouts.master')

@section('title','Edit Dokter')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dokter</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dokter</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Dokter</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('dokter.update',$dokter->id)}}" id="quickForm" method="POST">
                @method('PUT')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" id="exampleInputEmail1" placeholder="Edit Kategori" value="{{ $dokter->name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slug</label>
                    <input type="text" name="slug" class="form-control" id="exampleInputPassword1" placeholder="Edit Slug" value="slug">
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@stop

@section('footer2')
<!-- jquery-validation -->
<script src="{{ asset('template/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('template/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script>
$(function () {
//   $.validator.setDefaults({
//     submitHandler: function () {
//       alert( "Form successful submitted!" );
//     }
//   });
  $('#quickForm').validate({
    rules: {
      nama_kategori: {
        required: true,
        minlength: 5       
      },
      slug: {
        required: true
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@stop
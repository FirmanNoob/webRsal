@extends('layouts.master')
@section('header2')
<script type="stylesheet" src="{{ asset('editor.css')}}"></script>
 <!-- summernote -->
 <link rel="stylesheet" href="{{asset('template/plugins/summernote/bs5/summernote-bs5.scss')}}">
@stop
@section('title','Tambah Artikel')
@section('content')
<div class="content-wrapper" style="min-height: 2171.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Artikel</li>
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
                <h3 class="card-title">Tambah Artikel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('artikel.store')}}" id="quickForm"  novalidate="novalidate" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="Masukan Categori" value="{{ old('judul') }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Gambar</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                 </div>
                 <div class="form-group">
                    <label>Kategori Artikel</label>
                    <select name="categoris_id" class="form-control">
                        @foreach ($categori as $item)
                            <option value={{$item->id}}>{{$item->nama_kategori}}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="form-group">
                     <label for="exampleInputEmail1">Isi Artikel</label>
                     <!-- /.card-header -->
							<textarea class="summernote" style="display:none"></textarea> 
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
<!-- Summernote -->
<!-- jquery-validation -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('template/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('template/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script src="{{ asset('template/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{ asset('template/plugins/summernote/bs5/summernote-bs5.js')}}"></script>
<script type="text/javascript" src="{{ asset('editor.js')}}"></script>
<script>
			$(document).ready(function() {
				$("#txtEditor").Editor();
			});
		</script>
<script>
$(function () {
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
<script>
  $(function () {
    // Summernote
    $('.summernote').summernote()
  });
</script>
@stop
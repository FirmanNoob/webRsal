@extends('layouts.master')
@section('header2')
<script type="stylesheet" src="{{ asset('editor.css')}}"></script>
 <!-- summernote -->
 <!-- <link rel="stylesheet" href="{{asset('template/plugins/summernote/bs5/summernote-bs5.scss')}}"> -->
 <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
 
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
              <form action="{{ route('artikel.store')}}" id="quickForm" enctype="multipart/form-data" novalidate="novalidate" method="POST">
                   @method('POST')
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="Masukan Judul" value="{{ old('judul') }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Gambar</label>
                    <input name="gambar" type="file" class="form-control-file" id="exampleFormControlFile1">
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
							      <textarea name="body" id="summernote" placeholder="place some text area"></textarea> 
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
<!-- <script src="{{ asset('template/plugins/summernote/bs5/summernote-bs5.js')}}"></script> -->
<script type="text/javascript" src="{{ asset('editor.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.min.js"></script>
<script>
			$(document).ready(function() {
				$('#summernote').summernote();
			});
		</script>
@stop
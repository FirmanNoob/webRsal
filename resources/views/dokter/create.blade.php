@extends('layouts.master')
@section('title','Tambah Dokter')
@section('header3')
<!-- daterange picker -->
<link rel="stylesheet" href="{{ asset('template/plugins/daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@stop
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Dokter</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Dokter</li>
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
            <h3 class="card-title">Tambah Dokter</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <form action="{{ route('dokter.store')}}" method="POST">
              @method('POST')
              @csrf
          <!-- /.card-header -->
          <div class="card-body">
          <!-- Color Picker -->
          <div class="form-group">
                    <label for="exampleInputEmail1">Nama Dokter</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukan Categori" value="{{ old('name') }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Gambar</label>
                    <input name="gambar" type="file" class="form-control-file" id="exampleFormControlFile1">
                 </div>
                 <div class="form-group">
                    <label>Kategori Artikel</label>
                    <select name="hari_id" class="form-control">
                        @foreach ($hari as $item)
                            <option value={{$item->id}}>{{$item->hari}}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="form-group">
                    <label>Kategori Artikel</label>
                    <select name="speciality_id" class="form-control">
                        @foreach ($speciality as $item)
                            <option value={{$item->id}}>{{$item->speciality}}</option>
                        @endforeach
                    </select>
                 </div>
                <!-- time Picker -->
                <div class="form-group">
                <label>From :</label>
                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                    <input type="text" name="from" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                </div>
            </div>
                <!-- time Picker -->
                <div class="form-group">
                <label>To :</label>
                <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                    <input type="text" name="to" class="form-control datetimepicker-input" data-target="#datetimepicker3"/>
                    <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                </div>
              </div>
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

@section('footer3')
<!-- InputMask -->
<script src="{{ asset('template/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('template/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{ asset('template/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
                $('#datetimepicker4').datetimepicker({
                    format: 'LT'
                });
            });
</script>
@stop
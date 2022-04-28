@extends('admin.includes.base')

@section('title','Modifier Profession')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modifier la profession: {{ $profession->name }}</h1>
            @if ($errors->any())
              @foreach ($errors->all() as $e)
                <div class="error">
                  {{ $e }}
                </div>
              @endforeach
            @endif
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form class="" action="{{ route('profession.update', $profession->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Nom de la profession</label>
                  <input type="text" class="form-control" id="" placeholder="" name="name" value="{{ $profession->name }}">
                </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary mb-2">Modifier</button>
              </div>
            </div>
            <div class="col-6">

            </div>
          </div>
        </form>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection

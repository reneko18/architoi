@extends('admin.includes.base')

@section('title','Créer Catégorie')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Créer une nouvelle catégorie</h1>
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
        <form class="" action="{{ route('category.store') }}" method="post">
          @csrf
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Nom de la catégorie</label>
                  <input type="text" class="form-control" id="" placeholder="" name="name">
                </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary mb-2">CRÉER</button>
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

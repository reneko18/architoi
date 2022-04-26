@extends('admin.includes.base')

@section('title','Créer Projet')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Créer un nouvel projet</h1>
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
        <form class="" action="#" method="post">
          @csrf
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Nom du projet</label>
                  <input type="text" class="form-control" id="" placeholder="" name="projectname">
                </div>
                <div class="form-group col-6">
                  <label for="">Budget</label>
                  <input type="number" class="form-control" id="" placeholder="" name="budget">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Durée</label>
                  <input type="number" class="form-control" id="" placeholder="" name="duration">
                </div>
                <div class="form-group col-6">
                  <label for="">Surface</label>
                  <input type="number" class="form-control" id="" placeholder="" name="area">
                </div>
              </div>
              <div class="form-group col-12">
                <label for="">Nom complet du professionnel</label>
                <input type="text" class="form-control" id="" placeholder="" name="namepro">
              </div>
              <div class="form-group col-12">
                <label for="">Description</label>
                <textarea class="form-control" id="" rows="5" name="descriptionpro"></textarea>
              </div>
              <div class="form-group col-12">
                <label for="exampleFormControlFile1">Ajouter photo principale du projet</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="form-group col-12">
                <label for="exampleFormControlFile1">Ajouter des autres images</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
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

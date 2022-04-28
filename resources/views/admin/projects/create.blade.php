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
        <form class="" action="{{ route('project.store') }}" method="post">
          @csrf
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Nom du projet</label>
                  <input type="text" class="form-control" id="" placeholder="" name="name" value="{{ old("name","") }}">
                </div>
                <div class="form-group col-6">
                  <label for="">Budget</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">€</span>
                    </div>
                    <input type="number" class="form-control" id="" placeholder="" name="budget" value="{{ old("budget","") }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Durée</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id=""><i class="fa-solid fa-clock"></i></span>
                    </div>
                    <input type="number" class="form-control" id="" placeholder="" name="duration" value="{{ old("duration","") }}">
                  </div>
                  <small id="" class="form-text text-muted">Durée en mois</small>
                </div>
                <div class="form-group col-6">
                  <label for="">Surface</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id=""><i class="fa-solid fa-expand"></i></span>
                    </div>
                    <input type="number" class="form-control" id="" placeholder="" name="area" value="{{ old("area","") }}">
                  </div>
                  <small id="" class="form-text text-muted">Surface en m²</small>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Ville</label>
                  <input type="text" class="form-control" id="" placeholder="" name="city" value="{{ old("city","") }}">
                </div>
                <div class="form-group col-6">
                  <label for="">Rénovation</label>
                  <select class="form-control" id="" name="attribute_id">
                    <option value=""></option>
                    @foreach ($attributes as $a)
                      <option value="{{ $a->id }}" {{ old("attribute_id","") == $a->id ? "selected" : "" }}>{{ $a->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Nom complet du professionnel</label>
                  <select class="form-control" id="" name="type_id">
                    <option value=""></option>
                    @foreach ($professionals as $p)
                      <option value="{{ $p->id }}" {{ old("type_id","") == $p->id ? "selected" : "" }}>{{ $p->name }} {{ $p->lastname }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-6">
                  <label for="">Type de rénovation</label>
                  <select class="form-control" id="" name="professional_id">
                    <option value=""></option>
                    @foreach ($types as $t)
                      <option value="{{ $t->id }}" {{ old("attribute_id","") == $t->id ? "selected" : "" }}>{{ $t->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group col-12">
                <label for="">Description</label>
                <textarea class="form-control" id="" rows="5" name="description">{{ old("description","") }}</textarea>
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
                <button type="submit" class="btn btn-primary mb-2">Créer</button>
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

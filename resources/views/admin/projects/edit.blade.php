@extends('admin.includes.base')

@section('title','Modifier Projet')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modifier le projet: {{ $project->name }}</h1>
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
        <form class="" action="{{ route('project.update',$project->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Nom du projet</label>
                  <input type="text" class="form-control" id="" placeholder="" name="name" value="{{ $project->name }}">
                </div>
                <div class="form-group col-6">
                  <label for="">Budget</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">€</span>
                    </div>
                    <input type="number" class="form-control" id="" placeholder="" name="budget" value="{{ $project->budget }}">
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
                    <input type="number" class="form-control" id="" placeholder="" name="duration" value="{{ $project->duration }}">
                  </div>
                  <small id="" class="form-text text-muted">Durée en mois</small>
                </div>
                <div class="form-group col-6">
                  <label for="">Surface</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id=""><i class="fa-solid fa-expand"></i></span>
                    </div>
                    <input type="number" class="form-control" id="" placeholder="" name="area" value="{{ $project->area }}">
                  </div>
                  <small id="" class="form-text text-muted">Surface en m²</small>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Ville</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id=""><i class="fa-solid fa-building-flag"></i></span>
                    </div>
                    <input type="text" class="form-control" id="" placeholder="" name="city" value="{{ $project->city }}">
                  </div>
                </div>
                <div class="form-group col-6">

                </div>
              </div>
              <div class="form-group col-12">
                <label for="">Nom complet du professionnel</label>
                <select class="form-control" id="" name="professional_id">
                  <option value=""></option>
                  @foreach ($professionals as $p)
                    <option value="{{ $p->id }}" {{ $project->professional_id == $p->id ? 'selected' : '' }}>
                      {{ $p->name }} {{ $p->lastname }}
                    </option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-12">
                <label for="">Description</label>
                <textarea class="form-control" id="" rows="5" name="description">{{ $project->description }}</textarea>
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

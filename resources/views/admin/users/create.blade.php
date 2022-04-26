@extends('admin.includes.base')

@section('title','Créer Utilisateur')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Créer un nouvel utilisateur</h1>
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
        <form class="" action="{{ route('user.store') }}" method="post">
          @csrf
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="">Sélectionnez la profession</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio-professions">
                  <label class="form-check-label">Architecte</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio-professions">
                  <label class="form-check-label">Architecte d’intérieur</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio-professions">
                  <label class="form-check-label">Décorateur</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio-professions">
                  <label class="form-check-label">Paysagiste</label>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Ajouter photo de profil</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
            </div>
            <div class="col-6">
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Nom</label>
                  <input type="text" class="form-control" id="" placeholder="Votre nom" name="name">
                </div>
                <div class="form-group col-6">
                  <label for="">Prénom</label>
                  <input type="text" class="form-control" id="" placeholder="Votre Prénom" name="lastname">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Adresse email</label>
                  <input type="email" class="form-control" id="" placeholder="Votre email" name="email">
                </div>
                <div class="form-group col-6">
                  <label for="">Numéro de téléphone</label>
                  <input type="number" class="form-control" id="" placeholder="Votre Numéro de téléphone" name="phone">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Ville</label>
                  <input type="text" class="form-control" id="" name="city">
                </div>
                <div class="form-group col-6">
                  <label for="">Société</label>
                  <input type="text" class="form-control" id="" name="company">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Mot de passe</label>
                  <input type="password" class="form-control" id="" name="password">
                </div>
                <div class="form-group col-6">
                  <label for="">Confirmation mot de passe</label>
                  <input type="password" class="form-control" id="" >
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Ans d’expérience</label>
                  <input type="number" class="form-control" id="" name="experience">
                </div>
                <div class="form-group col-6">
                  <label for="">Chantiers réalises</label>
                  <input type="number" class="form-control" id="" name="works">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="">À propos</label>
                  <textarea class="form-control" id="" rows="5" name="description"></textarea>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary mb-2">Modifier</button>
              </div>
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

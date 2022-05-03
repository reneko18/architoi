@extends('includes.base')

@section('title','Inscription Espace Pro - Architoi')

@section('content')
  <section class="container-fluid">
    <div class="container">
      <h1>Nous rejoindre</h1>
      <h2>Informations générales</h2>
      <h3>Les champs marqués d’un * sont obligatoires</h3>
      <form class="mb-3">
        <div class="row mb-3">
          <div class="col-6 ">
            <label for="" class="form-label">Nom</label>
            <input type="text" class="form-control" id="">
          </div>
          <div class="col-6">
            <label for="" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="">
          </div>
        </div>
        <div class="col-12 mb-3">
          <label for="" class="form-label">Societé</label>
          <input type="text" class="form-control" id="">
        </div>
        <div class="col-12 mb-3">
          <label for="" class="form-label">Adresse email</label>
          <input type="email" class="form-control" id="">
        </div>
        <div class="col-12 mb-3">
          <label for="" class="form-label">Numéro de téléphone</label>
          <input type="number" class="form-control" id="">
        </div>
        <div class="col-12 mb-3">
          <label for="" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="">
        </div>
        <div class="col-12 mb-3">
          <label for="" class="form-label">Confirmation mot de passe</label>
          <input type="password" class="form-control" id="">
        </div>
        <div class="col-12 mb-3">
          <h2>Votre profession</h2>
        </div>
        <div class="col-12 mb-3">
          <select class="form-select" aria-label="Default select example">
            <option selected>Sélectionnez votre profession</option>
            <option value="1">Architecte</option>
            <option value="2">Architecte d’intérieur</option>
            <option value="3">Décorateur</option>
            <option value="4">Paysagiste</option>
          </select>
        </div>
        <div class="col-12 mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="">
            <label class="form-check-label" for="">
              En créant un compte, vous acceptez de vous conformer à la <a href="#">Politique de confidentialité</a> et aux <a href="#">Conditions générales</a> de Architoi.
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
      </form>
      <div class="col-12">
        <p>Déjà membre ? <a href="#">Se connecter</a></p>
      </div>
    </div>
  </section>

@endsection

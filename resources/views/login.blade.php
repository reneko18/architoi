@extends('includes.base')

@section('title','Inscription Espace Pro - Architoi')

@section('content')
<section class="container-fluid">
  <div class="container">
    <h1>Se connecter à l'espace pro</h1>
    <form class="">
      <div class="col-12 mb-3">
        <label for="" class="form-label"></label>
        <input type="email" class="form-control" id="" placeholder="Adresse email">
      </div>
      <div class="col-12 mb-3">
        <label for="" class="form-label"></label>
        <input type="password" class="form-control" id="" placeholder="Mot de passe">
      </div>
      <div class="col-12 mb-3">
          <a href="#">Mot de passe oublié ?</a>
      </div>
      <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
    <div class="col-12 mb-3">
        <p>Vous n’avez pas de compte ?<a href="#">S’inscrire</a></p>
    </div>
  </div>
</section>
@endsection

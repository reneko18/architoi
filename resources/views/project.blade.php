@extends('includes.base')

@section('title')
  {{ $project->name }} - Architoi
@endsection

@section('content')
  <section class="container-fluid">
    <div class="container">
      <h2>Projet</h2>
      <img src="" alt="">
      <p>{{ $project->name }}</p>
      <p>{{ $project->city }}</p>
      <p>€ {{ $project->budget }}</p>
      <p>{{ $project->duration }} mois</p>
      <p>{{ $project->area }} m²</p>
      <p>{{ $project->description }}</p>
    </div>
  </section>
  <section class="container-fluid">
    <div class="container">
      <h2>Images</h2>
      <div class="row">

      </div>
    </div>
  </section>

@endsection

@extends('includes.base')

@section('title')
  {{ $professional->name }} {{ $professional->lastname }} - Architoi
@endsection

@section('content')
  <section class="container-fluid">
    <div class="container">
      <h2>Profil</h2>
      <img src="" alt="">
      <p>{{ $professional->name }} {{ $professional->lastname }}</p>
      @foreach ($professional->professions as $p)
        {{ $loop->first ? '' : ', ' }}     
        <span>{{ $p->name }}</span>
      @endforeach
      <p>{{ $professional->city }}</p>
      <p>{{ $professional->experience }} ans d’expérience</p>
      <p>{{ $professional->works }} chantiers réalisés</p>
      <h2>{{ $professional->name }} en quelques mots</h2>
      <p>{{ $professional->description }}</p>
    </div>
  </section>
  <section class="container-fluid">
    <div class="container">
      <h2>Projets</h2>
      <div class="row">
        @forelse($professional->project as $pro)
        <div class="card" style="width: 18rem;">
          <img src="" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">{{ $pro->name }}</h5>
            <p class="card-text">{{ Str::limit($pro->description, 60) }}</p>
            <a href="#" class="btn btn-primary">Voir projet</a>
          </div>
        </div>
        @empty
          <p>Sans Projets</p>
        @endforelse
      </div>
    </div>
  </section>

@endsection

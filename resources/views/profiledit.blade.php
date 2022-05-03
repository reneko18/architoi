@extends('includes.base')

@section('title')
  Edition du profil de {{ $professional->name }} {{ $professional->lastname }} - Architoi
@endsection

@section('content')
  <section class="container-fluid">
    <div class="container">
      <h2>Profil</h2>
      <img src="" alt="">
      <a href="#" data-bs-toggle="modal" data-bs-target="#ModalEdit"><i class="fa-solid fa-pen-to-square"></i></a>
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
            <a href="#" data-bs-toggle="modal" data-bs-target="#ModalEditPro"><i class="fa-solid fa-pen-to-square"></i></a>
          </div>
        </div>
        @empty
          <p>Sans Projets</p>
        @endforelse
      </div>
    </div>
  </section>
  <!-- Modal Profil-->
  <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content container">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edition du profil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="" action="{{ route('professional.update',$professional->id) }}" method="post">
          @csrf
          @method("PUT")
        <div class="modal-body">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="">Sélectionnez la profession</label>
                  @foreach ($profession as $p)
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="profession_id[]" value="{{ $p->id }}" {{ $professional->professions->pluck('id')->contains($p->id) ? 'checked' : '' }}>
                        <label class="form-check-label">{{ $p->name }}</label>
                      </div>
                    @endforeach
                </div>
              </div>
              <div class="col-6">
                <div class="row">
                  <div class="form-group col-6">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" id="" placeholder="Votre nom" name="name" value="{{ $professional->name }}">
                  </div>
                  <div class="form-group col-6">
                    <label for="">Prénom</label>
                    <input type="text" class="form-control" id="" placeholder="Votre Prénom" name="lastname" value="{{ $professional->lastname }}">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label for="">Adresse email</label>
                    <input type="email" class="form-control" id="" placeholder="Votre email" name="email" value="{{ $professional->email }}">
                  </div>
                  <div class="form-group col-6">
                    <label for="">Numéro de téléphone</label>
                    <input type="number" class="form-control" id="" placeholder="Votre Numéro de téléphone" name="phone" value="{{ $professional->phone }}">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label for="">Ville</label>
                    <input type="text" class="form-control" id="" name="city" value="{{ $professional->city }}">
                  </div>
                  <div class="form-group col-6">
                    <label for="">Société</label>
                    <input type="text" class="form-control" id="" name="company" value="{{ $professional->company }}">
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
                    <input type="number" class="form-control" id="" name="experience" value="{{ $professional->experience }}">
                  </div>
                  <div class="form-group col-6">
                    <label for="">Chantiers réalises</label>
                    <input type="number" class="form-control" id="" name="works" value="{{ $professional->works }}">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="">À propos</label>
                    <textarea class="form-control" id="" rows="5" name="description">{{ $professional->description }}</textarea>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
        </form>
      </div>
    </div>
  </div>

@endsection

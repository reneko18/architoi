@extends('includes.base')

@section('title')
  {{ $project->name }} - Architoi
@endsection

@section('content')
  <section class="container-fluid">
    <div class="container">
      <h2>Projet</h2>
      @if ($errors->any())
        @foreach ($errors->all() as $e)
          <div class="error">
            {{ $e }}
          </div>
        @endforeach
      @endif
      <a href="#" data-bs-toggle="modal" data-bs-target="#ModalEdit"><i class="fa-solid fa-pen-to-square"></i></a>
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
  <!-- Modal Profil-->
  <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content container">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edition du projet</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="" action="{{ route('projet.update',$project->id) }}" method="post">
          @csrf
          @method("PUT")
        <div class="modal-body">
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
                    <span class="input-group-text" id="">€</span>
                    <input type="number" class="form-control" id="" placeholder="" name="budget" value="{{ $project->budget }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Durée</label>
                  <div class="input-group">
                    <span class="input-group-text" id=""><i class="fa-solid fa-clock"></i></span>
                    <input type="number" class="form-control" id="" placeholder="" name="duration" value="{{ $project->duration }}">
                  </div>
                  <small id="" class="form-text text-muted">Durée en mois</small>
                </div>
                <div class="form-group col-6">
                  <label for="">Surface</label>
                  <div class="input-group">
                    <span class="input-group-text" id=""><i class="fa-solid fa-expand"></i></span>
                    <input type="number" class="form-control" id="" placeholder="" name="area" value="{{ $project->area }}">
                  </div>
                  <small id="" class="form-text text-muted">Surface en m²</small>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="">Ville</label>
                  <div class="input-group">
                    <span class="input-group-text" id=""><i class="fa-solid fa-building-flag"></i></span>
                    <input type="text" class="form-control" id="" placeholder="" name="city" value="{{ $project->city }}">
                  </div>
                </div>
                <div class="form-group col-6">
                    <label for="">Rénovation</label>
                    <select class="form-control" id="" name="attribute_id">
                      <option value=""></option>
                      @foreach ($attributes as $a)
                        <option value="{{ $a->id }}" {{ $project->attribute_id == $a->id ? "selected" : "" }}>{{ $a->name }}</option>
                      @endforeach
                    </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">

                </div>
                <div class="form-group col-6">
                  <label for="">Type de rénovation</label>
                  <select class="form-control" id="" name="type_id">
                    <option value=""></option>
                    @foreach ($types as $t)
                      <option value="{{ $t->id }}" {{ $project->type_id == $t->id ? "selected" : "" }}>{{ $t->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group col-12">
                <label for="">Description</label>
                <textarea class="form-control" id="" rows="5" name="description">{{ $project->description }}</textarea>
              </div>
            </div>
            <div class="col-6">

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

@extends('admin.includes.base')

@section('title','Edition Utilisateurs')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modifier le profil de {{ $professional->name }} {{ $professional->lastname }}</h1>
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
        <form class="" action="{{ route('professional.update',$professional->id) }}" method="post">
          @csrf
          @method("PUT")
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="">Sélectionnez la profession</label>
                @foreach ($pro as $p)
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="profession_id[]" value="{{ $p->id }}" {{ $professional->professions->pluck('id')->contains($p->id) ? 'checked' : '' }}>
                      <label class="form-check-label">{{ $p->name }}</label>
                    </div>
                  @endforeach
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Ajouter photo de profil</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Ajouter photo de profil</label>
                <div class="dropzone"></div>
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
@push('script-dropzone')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js" integrity="sha512-oQq8uth41D+gIH/NJvSJvVB85MFk1eWpMK6glnkg6I7EdMqC1XVkW7RxLheXwmFdG03qScCM7gKS/Cx3FYt7Tg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone('.dropzone',{
        url: '{{ route('image.store') }}',
        dictDefaultMessage : 'Déposez vos images pour les téléverser',
        headers: {
          'X-CSRF-TOKEN' : '{{ csrf_token() }}'
        },
        acceptedFiles : 'image/*',
        maxFilesize : 2,
        paramName : 'image'
      });
      myDropzone.on('error', function(file,res){
        var msg = res.errors.image[0];
        $('.dz-error-message:last > span').text(msg);
      });
  </script>
@endpush

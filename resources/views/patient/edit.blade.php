@extends("layouts.layout_design")

@section("content")
  @if (session('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{ session('message') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  <form class="pt-3" method="post" action="{{ route('patient.update', $patient) }}">
      {{ csrf_field() }}
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Patient</h4>
            <p class="card-description">
              Ajouter un patient
            </p>
            <div class="forms-sample">
              <div class="form-group">
                <label for="references">references</label>
                <input type="text" value="{{$patient->reference}}" name="references" class="form-control" id="exampleInputName1" placeholder="references">
                @error('references') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Nom</label>
                <input type="text" value="{{$patient->nom_patient}}" name="nom" class="form-control" id="nom" placeholder="Nom">
                @error('nom') <div class="error">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="Prenom">Prenom</label>
                <input type="text" value="{{$patient->prenom_patient}}" name="prenom" class="form-control" id="Prenom" placeholder="Prenom">
                @error('prenom') <div class="error">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="date">Date de naissance</label>
                <input type="date" value="{{$patient->date_naissance}}" name="date" class="form-control" id="date" placeholder="Date de naissance">
                @error('date') <div class="error">{{ $message }}</div> @enderror
              </div>


              <div class="form-group">
                <label for="sexe">Sexe</label>
                  <select name="sexe" class="form-control" id="sexe">
                    <option @if ($patient->sexe === 'Masculin') selected @endif>Masculin</option>
                    <option @if ($patient->sexe === 'Feminin') selected @endif >Feminin</option>
                  </select>
                  @error('sexe') <div class="error">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="medecin">Medecin</label>
                  <select name="medecin" class="form-control" id="medecin">
                    @foreach ($medecins as $medecin)
                    <option value="{{$medecin->id}}" @if ($patient->Medecin_id == $medecin->id) selected @endif >{{$medecin->nom_medecin}} {{$medecin->prenom_medecin}}</option>
                    @endforeach
                    
                  </select>
                  @error('sexe') <div class="error">{{ $message }}</div> @enderror
              </div>
              
              <div class="form-group">
                <label for="situation_familiale">Situation familiale</label>
                <input type="text" value="{{$patient->situation_familliale}}" class="form-control" name="situation_familiale" id="situation_familiale" placeholder="Situation familiale">
                @error('situation_familiale') <div class="error">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="assurance_medicale">Assurance médical</label>
                <input type="text" value="{{$patient->assurance_medicale}}" class="form-control" name="assurance_medicale" id="assurance_medicale" placeholder="Assurance médical">
                @error('assurance_medicale') <div class="error">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" class="form-control" value="{{$patient->tel_patient}}" name="telephone" id="telephone" placeholder="Telephone">
                @error('telephone') <div class="error">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="groupe_sanguin">Groupe sanguin</label>
                <input type="text" class="form-control" value="{{$patient->groupe_sanguin}}" name="groupe_sanguin" id="groupe_sanguin" placeholder="Groupe sanguin">
                @error('groupe_sanguin') <div class="error">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="nom_pere">Nom du père</label>
                <input type="text" value="{{$patient->nom_pere}}" class="form-control" name="nom_pere" id="nom_du_pere" placeholder="Nom du père">
                @error('nom_pere') <div class="error">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="nom_mere">Nom de la mère</label>
                <input type="text" value="{{$patient->nom_mere}}" class="form-control" name="nom_mere" id="nom_mere" placeholder="Nom de la mère">
                @error('nom_mere') <div class="error">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="personne_prevenir">Nom de la personne à prévenir</label>
                <input type="text" value="{{$patient->nom_a_prevenir}}" class="form-control" name="personne_prevenir" id="personne_prevenir" placeholder="Nom de la personne à prévenir">
                @error('personne_prevenir') <div class="error">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="telephone_personne_prevenir">Telephone de la personne à prévenir</label>
                <input type="text" value="{{$patient->tel_a_prevenir}}" class="form-control" name="telephone_personne_prevenir" id="telephone_personne" placeholder="Telephone de la personne à prévenir">
                @error('telephone_personne_prevenir') <div class="error">{{ $message }}</div> @enderror
              </div>

              
              <button type="submit" class="btn btn-primary mr-2">Valider</button>
            </div>
          </div>
        </div>
      </div>
  </form>

  <style>
    .error {
      color: red;
      margin-top: 8px!important;
    }
  </style>

@endsection
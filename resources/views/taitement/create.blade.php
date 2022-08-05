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
  <form class="forms-sample" method="post" action="{{ route('traitement.store') }}">
      {{ csrf_field() }}
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Traitement</h4>
            <p class="card-description">
              Ajouter un traitement
            </p>
            <div class="forms-sample">

              <div class="form-group">
                <label for="patient">Patient</label>
                  <select name="patient" class="form-control" id="patient">
                    @foreach ($patients as $patient)
                    <option value="{{$patient->id}}">{{$patient->nom_patient}} {{$patient->prenom_patient}}</option>
                    @endforeach
                    
                  </select>
                  @error('patient') <div class="error">{{ $message }}</div> @enderror

              </div>
              <div class="form-group">
                <label for="medecin">Medecin</label>
                  <select name="medecin" class="form-control" id="medecin">
                    @foreach ($medecins as $medecin)
                    <option value="{{$medecin->id}}">{{$medecin->nom_medecin}} {{$medecin->prenom_medecin}}</option>
                    @endforeach
                    
                  </select>
                  @error('medecin') <div class="error">{{ $message }}</div> @enderror
              </div>
              
              <div class="form-group">
                <label for="Type analyse">Type d'analyse</label>
                <input type="text" class="form-control" name="Type analyse" id="Type analyse" placeholder="Type analyse">
                @error('Type analyse') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="Désignation">Désignation</label>
                <input type="text" class="form-control" name="Désignation" id="Désignation" placeholder="Désignation">
                @error('Désignation') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="Resultat">Resultat</label>
                <input type="text" class="form-control" name="Resultat" id="Resultat" placeholder="Resultat">
                @error('Resultat') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="tension">Tension</label>
                <input type="text" class="form-control" name="tension" id="tension" placeholder="tension">
                @error('tension') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="note">Note</label>
                <input type="text" class="form-control" name="note" id="note" placeholder="note">
                @error('note') <div class="error">{{ $message }}</div> @enderror
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
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
  <form class="forms-sample" method="post" action="{{ route('signe.store') }}">
      {{ csrf_field() }}
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Signe</h4>
            <p class="card-description">
              Ajouter un signe
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
                <label for="Etat_general">Etat general</label>
                  <select name="Etat_general" class="form-control" id="Etat_general">
                    <option>Bon</option>
                    <option>Mauvais</option>
                  </select>
                  @error('Etat_general') <div class="error">{{ $message }}</div> @enderror
              </div>

              <div class="form-group">
                <label for="Etat_de_Concience">Etat de Conscience</label>
                  <select name="Etat_de_Concience" class="form-control" id="Etat_de_Conciencel">
                    <option>Bon</option>
                    <option>Attérée</option>
                  </select>
                  @error('Etat_de_Concience') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="Etat_de_conjontive">Etat de conjontive</label>
                  <select name="Etat_de_conjontive" class="form-control" id="Etat_de_conjontive">
                    <option>Oui</option>
                    <option>Non</option>
                  </select>
                  @error('Etat_de_conjontive') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="OMI">OMI</label>
                  <select name="OMI" class="form-control" id="OMI">
                    <option>Oui</option>
                    <option>Non</option>
                  </select>
                  @error('OMI') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="Etat_physique">Etat physique</label>
                <input type="text" class="form-control" name="Etat_physique" id="Etat_physique" placeholder="Etat_physique">
                @error('Etat_physique') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="Diagnostic">Diagnostic</label>
                <input type="text" class="form-control" name="Diagnostic" id="Diagnostic" placeholder="Diagnostic">
                @error('Diagnostic') <div class="error">{{ $message }}</div> @enderror
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
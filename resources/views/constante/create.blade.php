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
  <form class="forms-sample" method="post" action="{{ route('constante.store') }}">
      {{ csrf_field() }}
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Constante</h4>
            <p class="card-description">
              Ajouter une constante
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
                <label for="poids">Poids</label>
                <input type="text" class="form-control" name="poids" id="poids" placeholder="poids">
                @error('poids') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="temperature">Temperature</label>
                <input type="text" class="form-control" name="temperature" id="temperature" placeholder="temperature">
                @error('temperature') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="taille">Taille</label>
                <input type="text" class="form-control" name="taille" id="taille" placeholder="taille">
                @error('taille') <div class="error">{{ $message }}</div> @enderror
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
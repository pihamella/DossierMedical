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
  <form class="forms-sample" method="post" action="{{ route('prescription.store') }}">
      {{ csrf_field() }}
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Prescription</h4>
            <p class="card-description">
              Ajouter une ordonnance médicale
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
                <label for="nom_de_formation">nom_de_formation</label>
                <input type="text" class="form-control" name="nom_de_formation" id="nom_de_formation" placeholder="nom_de_formation">
                @error('nom_de_formation') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="date_prescrition">date_prescrition</label>
                <input type="date" class="form-control" name="date_prescrition" id="date_prescrition" placeholder="date_prescrition">
                @error('date_prescrition') <div class="error">{{ $message }}</div> @enderror
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
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
  <form class="forms-sample" method="post" action="{{url('/prescription/store')}}">
      {{ csrf_field() }}
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Prescription</h4>
            <p class="card-description">
              Ajouter une ordonnance médicale
            </p>
            <div class="forms-sample" method="post" action="{{url('/prescription/store')}}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="DatePrescrition">DatePrescrition</label>
                <input type="date" class="form-control" name="DatePrescrition" id="DatePrescrition" placeholder="DatePrescrition">
                @error('DatePrescrition') <div class="error">{{ $message }}</div> @enderror
              </div>
              
              <div class="form-group">
                <label for="medecin">Identité du prescripteur</label>
                <input type="text" class="form-control" name="medecin" id="medecin" placeholder="medecin">
                @error('medecin') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="patient">Patient</label>
                <input type="text" class="form-control" name="patient" id="patient" placeholder="patient">
                @error('patient') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="Note">Note</label>
                <input type="text" class="form-control" name="Note" id="Note" placeholder="Note">
                @error('Note') <div class="error">{{ $message }}</div> @enderror
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
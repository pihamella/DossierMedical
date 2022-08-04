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
  <form class="forms-sample" method="post" action="{{url('/type_consultation/store')}}">
      {{ csrf_field() }}
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Consultation</h4>
            <p class="card-description">
              Ajouter une consultation
            </p>
            <div class="forms-sample" method="post" action="{{ route('type_consultation.store') }}">
              {{ csrf_field() }}
              {{-- <div class="form-group">
                <label for="type_consultation">Type_Consultation</label>
                  <select name="type_consultation" class="form-control" id="type_consultation">
                    <option>Medécine générale</option>
                    <option>Immunologie</option>
                    <option>Radiologie</option>
                    <option>Chirurgie</option>
                    <option>Neurologie</option>
                    <option>Pneumologie</option>
                    <option>Cardiologie</option>
                    <option>Dermatologie</option>
                    <option>Odontilogie</option>
                    <option>Hématologie</option>
                    <option>Service d'accueil de traitement des urgences</option>
                    <option>Gastro-entérologie</option>
                    <option>urologie</option>
                    <option>Pédiatrie</option>
                    <option>Maternité</option>
                    <option>Endocrinologie</option>
                    <option>Traumatologie</option>
                  </select>
                  @error('sexe') <div class="error">{{ $message }}</div> @enderror
              </div> --}}
              <div class="form-group">
                <label for="nom_type_consultation">Nom consultation</label>
                <input type="text" class="form-control" name="nom_type_consultation" id="nom_type_consultation" placeholder="Nom du type de consultation">
                @error('nom_type_consultation') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="prix_type_consultation">Prix_Consultation</label>
                <input type="text" class="form-control" name="prix_type_consultation" id="prix_type_consultation" placeholder="prix du type de consultation">
                @error('prix_type_consultation') <div class="error">{{ $message }}</div> @enderror
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
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
  <form class="forms-sample" method="post" action="{{ route('type_consultation.update', $type_consultation) }}">
      {{ csrf_field() }}
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Consultation</h4>
            <p class="card-description">
              modifier une consultation
            </p>
            <div class="forms-sample" method="post" action="{{url('/consultation/store')}}">
              {{ csrf_field() }}
              
              <div class="form-group">
                <label for="nom_type_consultation">Nom consultation</label>
                <input type="text" class="form-control" value="{{$type_consultation->nom_Type_consultation}}" name="nom_type_consultation" id="nom_type_consultation" placeholder="Nom du type de consultation">
                @error('nom_type_consultation') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form-group">
                <label for="prix_type_consultation">Prix_Consultation</label>
                <input type="text" class="form-control" value="{{$type_consultation->prix_consultation}}" name="prix_type_consultation" id="prix_type_consultation" placeholder="prix du type de consultation">
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
@extends("layouts.layout_design")

@section("content")
<div class="mb-3 row">
    <label for="inputName" class="col-sm-2 col-form-label">references</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName">
    </div>
  </div>
<div class="mb-3 row">
    <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPrenom" class="col-sm-2 col-form-label">Prenom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrenom">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPrenom" class="col-sm-2 col-form-label">Date_Naissance</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPrenom">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputSexe" class="col-sm-2 col-form-label">Sexe</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nputSexe">
    </div>
    
  </div>
  
  
  <div class="mb-3 row">
    <label for="inputSituation_Familial" class="col-sm-2 col-form-label">Situation_Familiale</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputSituation_Familial">
    </div>

  </div>
  <div class="mb-3 row">
    <label for="inputAssurance" class="col-sm-2 col-form-label">Assurance_Médical</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputAssurance">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPrenom" class="col-sm-2 col-form-label">Teléphone</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control" id="inputPrenom">
    </div>
    </div>

    <div class="mb-3 row">
    <label for="inputPrenom" class="col-sm-2 col-form-label">Nom_Père</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrenom">
    </div>
    </div>

    <div class="mb-3 row">
    <label for="inputPrenom" class="col-sm-2 col-form-label">Nom_Mère</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrenom">
    </div>
    </div>

    <div class="mb-3 row">
    <label for="inputPrenom" class="col-sm-2 col-form-label">Nom_Personne_a prévenir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrenom">
    </div>
    </div>

    <div class="mb-3 row">
    <label for="inputPrenom" class="col-sm-2 col-form-label">Num_Personne_a prévenir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrenom">
    </div>
    </div>
  

  @endsection
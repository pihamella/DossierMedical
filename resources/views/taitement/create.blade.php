@extends("layouts.layout_design")
@section("content")

<div class="mb-3 row">
    <label for="inputName" class="col-sm-2 col-form-label">Debut_traitement</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName">
    </div>
  </div>

  div class="mb-3 row">
    <label for="inputName" class="col-sm-2 col-form-label">Fin_traitement</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPrenom" class="col-sm-2 col-form-label">Prix</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrenom">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputNote" class="col-sm-2 col-form-label">Note</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nputNote">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputName" class="col-sm-2 col-form-label">Date_du_prochain_RDV</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName">
    </div>
  </div>

  @endsection
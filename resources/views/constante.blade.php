@extends("layouts.layout_design")
@section("content")

<div class="mb-3 row">
    <label for="inputName" class="col-sm-2 col-form-label">Poid</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputName" class="col-sm-2 col-form-label">Temperature</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPrenom" class="col-sm-2 col-form-label">Taille</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrenom">
    </div>
  </div>
  
  <div class="mb-3 row">
    <label for="inputPrenom" class="col-sm-2 col-form-label">Tension</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrenom">
    </div>
  </div>

  @endsection
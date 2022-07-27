@extends("layouts.layout_design")
@section("content")

<div class="mb-3 row">
    <label for="inputName" class="col-sm-2 col-form-label">Type_consultation</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputName" class="col-sm-2 col-form-label">Date_consultation</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputName">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPrenom" class="col-sm-2 col-form-label">Prix</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrenom">
    </div>
  </div>
  @endsection
@extends("layouts.layout_design")

@section("content")
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap.min.css">
  @if (session('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{ session('message') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Liste des patients</h4>
        
        <div class="table-responsive">
          <table id="example" class="table table-striped">
            <thead>
              <tr>
                <th>
                  Nom
                </th>
                <th>
                  Prenom
                </th>
                <th>
                  Reference
                </th>
                <th>
                  Date de naissance
                </th>
                <th>
                  Sexe
                </th>
                <th>
                    Situation familiale
                </th>
                <th>
                    Assurance medicale
                </th>
                <th>
                    Téléphone
                </th>
                <th>
                    Nom du père
                </th>
                <th>
                    Nom de la mère
                </th>
                <th>
                    Personne à prévenir
                </th>

                <th>
                    Telephone personne à prévenir
                </th>
                <th>
                  Actions
              </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    
                  <tr>
                    
                    <td>
                        {{$patient->nom_patient}}
                    </td>
                    <td>
                        {{$patient->prenom_patient}}
                    </td>
                    <td>
                        {{$patient->reference}}
                    </td>
                    <td>
                        {{$patient->date_naissance}}
                    </td>
    
                    <td>
                        {{$patient->sexe}}
                    </td>
    
                    <td>
                        {{$patient->situation_familliale}}
                    </td>
    
                    <td>
                        {{$patient->assurance_medicale}}
                    </td>
    
                    <td>
                        {{$patient->tel_patient}}
                    </td>
                    <td>
                        {{$patient->nom_pere}}
                    </td>
                    <td>
                        {{$patient->nom_mere}}
                    </td>
                    <td>
                        {{$patient->nom_a_prevenir}}
                    </td>
                    <td>
                        {{$patient->tel_a_prevenir}}
                    </td>
                    <td class="template-demo">
                      <form  method="get" action="{{ route('patient.edit', $patient) }}">
                          <button type="submit" class="btn btn-outline-primary btn-fw">Modifier</button>
                      </form>

                      <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-danger btn-fw">Supprimer</button>   
                    </td>
                  </tr>
                @endforeach
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Supprimer un patient</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Voulez-vous supprimer ce patient ?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Annuler</button>
                        <form  method="post" action="{{ route('patient.delete', $patient) }}">
                          {{ method_field('DELETE') }}
                          {{  csrf_field() }}
                          <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                      </div>
                    </div>
                  </div>
              </div>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap.min.js"></script>

  <script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
  </script>

  <style>
    .error {
      color: red;
      margin-top: 8px!important;
    }

    .dataTables_wrapper .dataTable .btn, .dataTables_wrapper .dataTable .fc button, .fc .dataTables_wrapper .dataTable button, .dataTables_wrapper .dataTable .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .dataTables_wrapper .dataTable .ajax-file-upload, .dataTables_wrapper .dataTable .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper .dataTable .swal2-styled, .dataTables_wrapper .dataTable .wizard > .actions a, .wizard > .actions .dataTables_wrapper .dataTable a {
        padding: 0.8rem !important;
        vertical-align: top;
    }
  </style>

@endsection
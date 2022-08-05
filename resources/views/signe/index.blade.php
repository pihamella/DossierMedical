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
        <h4 class="card-title">Liste des signes</h4>
        
        <div class="table-responsive">
          <table id="example" class="table table-striped">
            <thead>
              <tr>
                <th>
                  Patient
                </th>
                <th>
                Etat general
                </th>
                <th>
                Etat de Conscience
                </th>
                <th>
                Etat de conjontive
                </th>
                <th>
                OMI
                </th>
                <th>
                Etat physique
                </th>

                <th>
                Diagnostic
                    </th>
                <th>
                  Actions
              </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($signe as $signe)
                    
                    <tr>
                        <td>
                            {{$signe['nom_patient']}} {{$signe['prenom_patient']}}
                        </td>
                    
                        <td>
                            {{$signe['etat_general']}}
                        </td>
                        <td>
                            {{$signe['etat_de_Concience']}}
                        </td>
                        <td>
                            {{$signe['etat_de_conjontive']}}
                        </td>
                        <td>
                            {{$signe['OMI']}}
                        </td>
        
                        <td>
                            {{$signe['etat_physique']}}
                        </td>
                        <td>
                            {{$signe['diagnostic']}}
                        </td>
        
                        <td class="template-demo">
                            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-danger btn-fw"> Supprimer </button>
                        </td> 
                    
                    </tr>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Supprimer un signe</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Voulez-vous supprimer cette consultance ?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Annuler</button>
                              <form  method="post" action="{{ route('signe.delete', $signe['id']) }}">
                                {{ method_field('DELETE') }}
                                {{  csrf_field() }}
                                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div>
                @endforeach

                
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
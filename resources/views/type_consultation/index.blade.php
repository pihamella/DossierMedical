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
                  Nom consultation
                </th>
                <th>
                  Prix consultation
                </th>
                <th>
                    Date creation
                </th>
                <th>
                    Actions
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($type_consultations as $type_consultation)
                    
                    <tr>
                        <td>
                            {{$type_consultation->nom_Type_consultation}}
                        </td>
                        <td>
                            {{$type_consultation->prix_consultation}}
                        </td>
                        <td>
                            {{$type_consultation->created_at}}
                        </td>
                        <td class="row">
                            <form  method="get" action="{{ route('type_consultation.edit', $type_consultation) }}">
                                <button type="submit" class="btn btn-outline-primary btn-fw">Modifier</button>
                            </form>

                            
                            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-danger btn-fw ml-2">Supprimer</button>
                            
                            
                        </td>
                    </tr>

                    @endforeach
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Supprimer un type de consultation</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Voulez-vous supprimer ce type de consultation ?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Annuler</button>
                              <form  method="post" action="{{ route('type_consultation.delete', $type_consultation) }}">
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
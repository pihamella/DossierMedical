@extends('layouts.layout_design')
@section('title')
Tous les administrateurs
@endsection
@section('content')

<section class="content">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Liste de tous les utilisateur</h4>
                  <p class="card-description">
                    DossierM <code>.Utilisateur</code>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Nom Complet
                          </th>
                          <th>
                            Role
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Date creation
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($adminsList as $i=>$admin)
                        <tr>
                          <th>{{$i+1}}</th>
                          <th>{{$admin->name}}</th>
                          <th>{{$admin->role}}</th>
                          <th>{{$admin->email}}</th>
                          <th>{{$admin->created_at}}</th>
                          <th>
                            <div class="dropdown">
                              <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal{{$i}}">Modifier</button>
                                <a class="dropdown-item" type="button">Activé</a>
                                <a class="dropdown-item" type="button">Bloqué</a>
                              </div>
                            </div>
                          </th>   
                          @endforeach
                        </tbody>                  
                    </table>
                  </div>
                </div>
              </div>
            </div>
</section>



@endsection
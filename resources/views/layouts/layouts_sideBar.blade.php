<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Tableau de bord</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#patient" aria-expanded="false" aria-controls="patient">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Patient</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="patient">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('patient.create')}}">Ajouter</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('patient.index')}}">Liste</a></li>
              </ul>
            </div>

            
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#type_consultation" aria-expanded="false" aria-controls="type_consultation">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title"> Type consultation</span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="type_consultation">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('type_consultation.create')}}"> Ajouter </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('type_consultation.index')}}">Liste</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#constante" aria-expanded="false" aria-controls="constante">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title"> Constantes </span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="constante">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('constante.create')}}"> Ajouter </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('constante.index')}}">Liste</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#signe" aria-expanded="false" aria-controls="signe">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title"> Signes </span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="signe">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('signe.create')}}"> Ajouter </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('signe.index')}}">Liste</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#analyse" aria-expanded="false" aria-controls="analyse">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title"> Analyse </span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="analyse">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('analyse.create')}}"> Ajouter </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('analyse.index')}}">Liste</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#prescription" aria-expanded="false" aria-controls="prescription">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title"> Prescription </span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="prescription">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('prescription.create')}}"> Ajouter </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('prescription.index')}}">Liste</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#traitement" aria-expanded="false" aria-controls="traitement">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title"> Traitement </span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="traitement">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('traitement.create')}}"> Ajouter </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('traitement.index')}}">Liste</a></li>
              </ul>
            </div>
          </li>
          


        </ul>
      </nav>
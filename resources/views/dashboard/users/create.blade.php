<!DOCTYPE html>
<html lang="en">
    @include('dashboard.includes.head')

    <body class="">
        @include('dashboard.includes.menu')

        <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="{{ url('usermanagement') }}">Create User</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('immobporto') }}">
                  <i class="now-ui-icons business_bank"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Accueil</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Se deconnecter</span>
                  </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
      <div class="panel-header panel-header-sm">
      </div>

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Profil</h5>
              </div>
              <div class="card-body">
             
               
                {!! Form::open(['route'=>'user.store']) !!}
                 <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Role</label>
                        <select type="text" class="form-control" id="role" name="role" >
                          <option selected>Agent</option>
                          <option>Client</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Adresse email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email"  value="Email" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" id="surname" name="surname" class="form-control" placeholder="Nom" value="Nom" required>
                      </div>
                    </div>
                    
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Prénom" value="Prénom" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password"  name="password" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Confirmer le mot de passe</label>
                        <input type="password"  name="password_confirmation" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
                                </button>
                            </div>
                   </div>
                {!! Form::close() !!}
              </div>
            </div>
          </div>
          </div>
      </div>

      @include('dashboard.includes.footer')
      @include('dashboard.includes.script')
    </body>
</html>
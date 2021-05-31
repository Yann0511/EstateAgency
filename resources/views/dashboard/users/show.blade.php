<!DOCTYPE html>
<html lang="en">
    @include('dashboard.includes.head')

    <body class="user-profile">
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
            <a class="navbar-brand" href="{{ url('usermanagement') }}">Show User</a>
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
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Profil</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" readonly = "readonly" placeholder="Role" value="{{ $user->role }}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Adresse email</label>
                        <input type="email" class="form-control" placeholder="Email" readonly = "readonly" value="{{ $user->email }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" placeholder="Nom" value="{{ $user->surname }}" readonly = "readonly">
                      </div>
                    </div>
                    
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" class="form-control" placeholder="Prénom" value="{{ $user->name }}" readonly = "readonly">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="{{ $user->adresse }}" readonly = "readonly">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>A propos</label>
                        <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">{{ $user->about }}</textarea>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="/dashboard/assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="{{ $user->photo}}" alt="...">
                    <h5 class="title">{{ $user->name}} {{$user->surname}}</h5>
                  </a>
                  
                </div>
                <p class="description text-center">
                  {{ $user->about}}
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      @include('dashboard.includes.footer')
      @include('dashboard.includes.script')
    </body>
</html>
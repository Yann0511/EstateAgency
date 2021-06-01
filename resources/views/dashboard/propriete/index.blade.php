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
            <a class="navbar-brand" href="#">My Property</a>
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
      <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Liste de tout mes propriétés</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        id
                      </th>
                      <th>
                        Titre
                      </th>
                      <th>
                        Adresse
                      </th>
                      <th>
                        Prix
                      </th>
                      <th>
                        Voir/Modifer
                      </th>
                      <th class="text-right">
                        Supprimer
                      </th>
                    </thead>
                    <tbody>
                        @foreach($proprietes as $p)
                      <tr>
                        <td>
                          {{$p->id}}
                        </td>
                        <td>
                          {{ $p->name }}
                        </td>
                        <td>
                          {{ $p->adresse }}
                        </td>
                        <td>
                          {{ $p->prix }}
                        </td>
                        <td>
                            <a href="{{route('propriete.edit', [$p->id])}}">
                              <i class="now-ui-icons arrows-1_refresh-69"></i>
                            </a>
                        </td>
                        <td class="text-right">
                              <i class="now-ui-icons ui-1_simple-remove"></i>
                              {!! Form::open(['method'=>'DELETE', 'route'=>['propriete.destroy', $p->id]]) !!}
                              {!! Form::submit('', ['class'=> 'now-ui-icons ui-1_simple-remove', 'onclick'=> 'return confirm(\'Vraiment supprimer cette propriete?\')']) !!}
                              {!! Form::close() !!}
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          {!! $links !!}
        </div>
        </div>
      @include('dashboard.includes.footer')
      @include('dashboard.includes.script')
    </body>
</html>
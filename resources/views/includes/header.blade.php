			<div class="container">
				<div class="nav-header">
					<a class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="{{ url('immobporto') }}"><i class="icon-home"></i>Immob<span>Porto</span></a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="{{ url('immobporto') }}">Accueil</a></li>
							<li>
								<a  class="fh5co-sub-ddown">Annonce</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Demande</a></li>
									<li><a href="#">Offre</a></li>
								</ul>
							</li>
							<li><a href="#">Nos Agent</a></li>
							 <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a href="{{ route('login') }}">Se connecter</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">S'inscrire</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a class="fh5co-sub-ddown">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="fh5co-sub-menu">
									<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Se déconnecter
                                    </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @endguest
						</ul>
					</nav>
				</div>
			</div>

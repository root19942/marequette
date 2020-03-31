<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="marequete">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>

      <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="./img/flavicon.png" />
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="res/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="res/font-awesome/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="res/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="res/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="res/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="res/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="res/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/register-login.css">




    <style type="text/css">
        body {
          padding: 2rem 0rem;
        }

        .card-img {
          border-bottom-left-radius: 0px;
          border-bottom-right-radius: 0px;
        }

        .card-title {
          margin-bottom: 0.3rem;
        }

        .cat {
          display: inline-block;
          margin-bottom: 1rem;
        }

        .fa-users {
          margin-left: 1rem;
        }

        .card-footer {
          font-size: 0.8rem;
        }
    </style>
</head>
<body ng-controller="HomeCtrl">

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 px-5">
              <div class="card">
                            @if (Auth::user()->genre == 'male')
                                <img class="card-img" src="img/man.svg" style="width: 85%;" alt="Bologna">
                            @endif
                            @if (Auth::user()->genre == 'female')
                                <img class="card-img" src="img/woman.svg" style="width: 85%;" alt="Bologna">
                            @endif
                
                <div class="card-img-overlay" style="height: 30px;">
                  <a href="{{ route('home') }}" class="btn btn-light btn-sm"><b>Matricule: {{ Auth::user()->matricule }}</b></a>
                </div>
                <div class="card-body">
                  <h4 class="card-title">{{ Auth::user()->name . Auth::user()->subname }}</h4>
                  <small class="text-muted cat">
                    <img src='img/filiere.svg' style="width: 30px"> faculté des sciences
                    <img src="img/niveau d'etude.svg" style="width: 30px"></i> IF3
                  </small>
                  <p class="card-text">I love quick, simple pasta dishes.</p>
                  <a href="{{ route('requete') }}" class="btn btn-primary m-1" style="width: 100%;">Rediger une Requetes</a>
                  <a href="{{ route('historique') }}" class="btn btn-info m-1" style="width: 100%;">Mes Requettes</a>
                  <a href="{{ route('user_detail') }}" class="btn btn-warning m-1" style="width: 100%;">Mes Informations</a>
                  <a href="{{ route('logout') }}" class="btn btn-danger m-1" style="width: 100%;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Deconnexion </a>
                </div>
                <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                  <div class="views"> {{ now('l jS \\of F Y ') }}
                  </div>
                  <div class="stats">
                    <img src="img/requete.svg" style="width: 30px;margin-bottom: -10px"></i> 1347
                    {{-- <i class="far fa-comment"></i> 12 --}}
                  </div>
                   
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 p-4">
                @yield('content') 
            </div>
          </div>
           
        </main>
    </div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.9/angular.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

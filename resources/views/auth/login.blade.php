<!DOCTYPE html>
<html lang="fr" ng-app="IF-ADMIN">
<head>
  <title>MarequetE</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="./img/flavicon.png" />
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="res/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body ng-controller="ConneCtrl">
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">

          <span class="login100-form-title p-b-34">
          <center>
            <img src="./img/logo login.png" style="vertical-align: middle;width: 200px;">
          </center>
          <br><br>
            Connexion
          </span>
            @csrf
          
          <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
          <input id="email" type="email" placeholder="votre login" class="form-control input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="focus-input100 invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>








          <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
            <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" ng-model="pass" placeholder="mot de pass" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback focus-input100" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>        
          

          <div class="form-group row">
                <div class="col-md-12 offset-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

          
          <div class="container-login100-form-btn">
            <!-- <button class="login100-form-btn"> -->
              <button class="login100-form-btn">
              {{ __('Login') }}
              </button>
          </div>
          <br>
          <br>
          <br>
          <div class="container-login100-form-btn">
              <a class="login100-form-btn_init" href="{{ route('register') }}">
              {{ __('Inscription') }}
              </a>
          </div>

          <div class="w-full text-center p-t-27 p-b-239">

          @if (Route::has('password.request'))
            <a class="btn btn-link txt2" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
          @endif


          </div>

        </form>

        <div class="login100-more" style="background-image: url('img/backlogin.svg');background-size: 90% 90%;">

          <!-- <img src="https://www.ifcad.net/img/ifcad.gif" style="    position: absolute;
    top: 43%;
    left: 30%;
    width: 33%;"> -->

        </div>
      </div>
    </div>
  </div>
  
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="res/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="res/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="res/bootstrap/js/popper.js"></script>
  <script type="text/javascript" src="./res/bootstrap/js/bootstrap.js"></script>
<!--===============================================================================================-->
  <script src="res/select2/select2.min.js"></script>
  <script>
    $(".selection-2").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
<!--===============================================================================================-->
  <script src="res/daterangepicker/moment.min.js"></script>
  <script src="res/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="res/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
<!--===============================================================================================-->
  <script src="./res/Metro-UI-CSS-master/build/js/metro.js"></script>

<!--===============================================================================================-->
  <script type="text/javascript" src="./res/angular.min.js"></script>
<!--==============================================================-->
  <script type="text/javascript" src="./res/app.js"></script>
<!--==============================================================-->
  <script src="./res/contextMenu.js"></script>


</body>
</html>
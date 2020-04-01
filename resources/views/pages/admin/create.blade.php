<!DOCTYPE html>
<html lang="fr" ng-app="IF-ADMIN">
<head>
  <title>MarequetE | inscription</title>
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
  <link rel="stylesheet" type="text/css" href="css/register-login.css">
<!--===============================================================================================-->
</head>
<body ng-controller="ConneCtrl">

<center>
    <img src="./img/logo login.png" style="vertical-align: middle;width: 200px;">
</center>



<div>
<div class="container-fluid" style="width:90vw">
<form method="POST" action="{{ route('register-admin') }}">
        @csrf
    <h1 style='text-align:center'>Inscrription</h1>
    <br>
    
    <div class="row">
        <div class="col-md-6">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="email" name='email'>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
    </div>
    <!-- <div class="row">
        <div class="col-md-12">
            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="entrer vos quitus" name='fichiers'>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-6">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputpassword1" value="{{ old('password') }}" required autocomplete="password"  placeholder="password" name='password'>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control @error('confirm-password') is-invalid @enderror" name="password_confirmation" value="{{ old('confirm-password') }}" required autocomplete="new-password"  placeholder="confirm-password" >
            @error('confirm-password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
        <button class="btn btn-primary col-md-12 col-xs-12" type='submit'>M'inscrire</button>
    </div>
</form>


</div>
</div>
 


  


</body>
</html>
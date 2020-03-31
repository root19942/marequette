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
<form method="POST" action="{{ route('register') }}">
        @csrf
    <h1 style='text-align:center'>Inscrription</h1>
    <br>
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nom" name='name'>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-6">
            <input type="text" class="form-control @error('subname') is-invalid @enderror" id="subname" value="{{ old('subname') }}" required autocomplete="subname"  placeholder="Prenom" name='subname'>
            @error('subname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <select id="genre" class="form-control @error('genre') is-invalid @enderror"  required autocomplete="genre"  placeholder="établisement" name='genre'>
                <option value="">genre</option>
                <option value="male">masculin</option>
                <option value="female">feminin</option>
            </select>
            @error('etablisement')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-6">
            <select id="etablisement" class="form-control @error('etablisement') is-invalid @enderror"  required autocomplete="etablisement"  placeholder="établisement" name='etablisement'>
                <option value="teste">etablisement</option>
                <option value="teste1">Teste1</option>
                <option value="teste2">Teste2</option>
                <option value="teste3">Teste3</option>
                <option value="teste4">Teste4</option>
            </select>
            @error('etablisement')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-6">
            <select id="faculte" class="form-control @error('faculte') is-invalid @enderror"  required autocomplete="faculte"  placeholder="faculté" name='faculte'>
                <option value="teste">faculte</option>
                <option value="teste1">Teste1</option>
                <option value="teste2">Teste2</option>
                <option value="teste3">Teste3</option>
                <option value="teste4">Teste4</option>
            </select>
            @error('faculte')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <select id="filiere" class="form-control @error('filiere') is-invalid @enderror"  required autocomplete="filiere"  placeholder="filiere" name='filiere'>
                <option value="teste">filiere</option>
                <option value="teste1">Teste1</option>
                <option value="teste2">Teste2</option>
                <option value="teste3">Teste3</option>
                <option value="teste4">Teste4</option>
            </select>
            @error('filiere')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-6">
            <select id="niveau" class="form-control @error('niveau') is-invalid @enderror"  required autocomplete="niveau"  placeholder="niveau" name='niveau'>
                <option value="teste">niveau</option>
                <option value="teste1">Teste1</option>
                <option value="teste2">Teste2</option>
                <option value="teste3">Teste3</option>
                <option value="teste4">Teste4</option>
            </select>
            @error('niveau')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <input id="" class="form-control @error('matricule') is-invalid @enderror"  required autocomplete="matricule"  placeholder="matricule" name='matricule' style='text-align:center'>
            @error('matricule')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="email" name='email'>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="exampleInputtelephone1" value="{{ old('telephone') }}" required autocomplete="telephone"  placeholder="telephone" name='telephone'>
            @error('telephone')
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
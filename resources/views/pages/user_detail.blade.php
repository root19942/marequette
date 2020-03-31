@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" type="text/css" href="css/user_detail_style.css">
<?php
    if (Auth::user()->fichiers != null ) {
        $user_file = explode(";", Auth::user()->fichiers);
    }
    else{
        $user_file = array(
                'doc1' => '',
                'doc2' => '',
                'doc3' => '',
                'doc4' => '',
                 );
    }

     
?>
<div class="container">
    <form method="POST" action="{{ route('update_user') }}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Mes informations</div>

                    <div class="card-body">
                            <br>
                            <div class="row">

                                <div class="col-md-6 input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">Matricule :</div>
                                    </div>
                                    <input id="" class="form-control @error('matricule') is-invalid @enderror" disabled  required autocomplete="matricule" value="{{ Auth::user()->matricule }}"  placeholder="matricule" name='matricule' style='text-align:center'>

                                    @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" ng-disabled='! editable' name='name' id="name" value="{{ Auth::user()->name }}" >
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('subname') is-invalid @enderror" name='subname' ng-disabled='! editable' id="subname" value="{{ Auth::user()->subname }}" >
                                    @error('subname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <select id="genre" class="form-control @error('genre') is-invalid @enderror" name='genre' ng-disabled='! editable' >
                                        <option value="{{ Auth::user()->genre }}">{{ Auth::user()->genre }}</option>
                                        <option value="male">masculin</option>
                                        <option value="female">feminin</option>
                                    </select>
                                    @error('genre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select id="etablisement" class="form-control @error('etablisement') is-invalid @enderror" name='etablisement' ng-disabled='! editable' value="{{ Auth::user()->etablisement }}">
                                        <option value="{{ Auth::user()->etablissement }}">{{ Auth::user()->etablisement }}</option>
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
                                    <select id="faculte" class="form-control @error('faculte') is-invalid @enderror" ng-disabled='! editable' name='faculte' value="{{ Auth::user()->faculte }}">
                                        <option value="{{ Auth::user()->faculte }}">{{ Auth::user()->faculte }}</option>
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
                                    <select id="filiere" class="form-control  @error('filiere') is-invalid @enderror"  ng-disabled='! editable' name='filiere' value="{{ Auth::user()->filiere }}" >
                                        <option value="{{ Auth::user()->filiere }}">{{ Auth::user()->filiere }}</option>
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
                                    <select id="niveau" class="form-control @error('niveau') is-invalid @enderror" ng-disabled='! editable'  required autocomplete="niveau" name='niveau' value="{{ Auth::user()->niveau }}">
                                        <option value="{{ Auth::user()->niveau }}">{{ Auth::user()->niveau }}</option>
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
                                <div class="col-md-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" ng-disabled='! editable' value="{{ Auth::user()->email }}" required autocomplete="email"  placeholder="email" name='email'>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="exampleInputtelephone1" ng-disabled='! editable' value="{{ Auth::user()->telephone }}" required autocomplete="telephone"  placeholder="telephone" name='telephone'>
                                    @error('telephone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                   <h1 class="titleDocument" style="font-weight: bold;font-size: 23px" >
                                        Vos Documents<br>
                                        <small>Veuillez ajouter les quetre quitus à la fois</small>
                                    </h1>
                                </div>
                            </div>
                            @if (Auth::user()->fichiers)
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="container">
                                            <h1 class='titleDocument'>Document 1
                                            </h1>
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' disabled id="quitus1" accept=".png, .jpg, .jpeg" name="doc1" />
                                                    <label for="quitus1"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreviewQ1" style="background-image: url({{'documents/'. Auth::user()->matricule.'/' .$user_file[0]}});">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="container">
                                            <h1 class='titleDocument'>Document 2
                                            </h1>
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' disabled id="recu1" accept=".png, .jpg, .jpeg" name="doc2" />
                                                    <label for="recu1"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreviewR1" style="background-image: url({{'documents/'. Auth::user()->matricule.'/' .$user_file[1]}});">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="container">
                                            <h1 class='titleDocument'>Document 3
                                            </h1>
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' disabled id="quitus2" accept=".png, .jpg, .jpeg" name="doc3" />
                                                    <label for="quitus2"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreviewQ2" style="background-image: url({{'documents/'. Auth::user()->matricule.'/' .$user_file[2]}});">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="container">
                                            <h1 class='titleDocument'>Document 4
                                            </h1>
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' disabled id="recu2" accept=".png, .jpg, .jpeg" name="doc4" />
                                                    <label for="recu2"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreviewR2" style="background-image: url({{'documents/'. Auth::user()->matricule.'/' .$user_file[3]}});">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="container">
                                            <h1 class='titleDocument'>Document 1
                                            </h1>
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="quitus1" accept=".png, .jpg, .jpeg" name="doc1" />
                                                    <label for="quitus1"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreviewQ1" style="background-image: url(img/document.svg);background-size: 90% 90%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="container">
                                            <h1 class='titleDocument'>Document 2
                                            </h1>
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="recu1" accept=".png, .jpg, .jpeg" name="doc2" />
                                                    <label for="recu1"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreviewR1" style="background-image: url(img/document.svg);background-size: 90% 90%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="container">
                                            <h1 class='titleDocument'>Document 3
                                            </h1>
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="quitus2" accept=".png, .jpg, .jpeg" name="doc3" />
                                                    <label for="quitus2"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreviewQ2" style="background-image: url(img/document.svg);background-size: 90% 90%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="container">
                                            <h1 class='titleDocument'>Document 4
                                            </h1>
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="recu2" accept=".png, .jpg, .jpeg" name="doc4" />
                                                    <label for="recu2"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreviewR2" style="background-image: url(img/document.svg);background-size: 90% 90%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="row">
                                
                                <div class="col-md-12">
                                    <input type="checkbox" name='modifier_profile' class="" ng-model='editable' style='text-align:center'> Modifier mes infoemartions
                                    @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary col-md-12 col-xs-12" type='submit' ng-disabled='! editable' >Modifier</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

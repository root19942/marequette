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
    <form method="POST" action="{{ route('add_requete') }}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Ajouter Requete</div>

                    <div class="card-body">
                            <br>
                            <div class="row">

                                    <div class="col-md-6 input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Matricule :</div>
                                        </div>
                                        <input id="" class="form-control @error('matricule') is-invalid @enderror" disabled  required autocomplete="matricule" value="{{ Auth::user()->matricule }}"  placeholder="matricule" name='matricule' style='text-align:center'>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Nom :</div>
                                        </div>
                                        <input id="" class="form-control @error('name') is-invalid @enderror" disabled  required autocomplete="name" value="{{ Auth::user()->name }}"  placeholder="name" name='name' style='text-align:center'>
                                </div>
                                <div class="col-md-6 input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Prenom :</div>
                                        </div>
                                        <input id="" class="form-control @error('subname') is-invalid @enderror" disabled  required autocomplete="subname" value="{{ Auth::user()->subname }}"  placeholder="subname" name='subname' style='text-align:center'>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Faculté :</div>
                                        </div>
                                        <input id="" class="form-control @error('faculte') is-invalid @enderror" disabled  required autocomplete="faculte" value="{{ Auth::user()->faculte }}"  placeholder="faculte" name='faculte' style='text-align:center'>
                                </div>
                                <div class="col-md-6 input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Niveau :</div>
                                        </div>
                                        <input id="" class="form-control @error('niveau') is-invalid @enderror" disabled  required autocomplete="niveau" value="{{ Auth::user()->niveau }}"  placeholder="niveau" name='niveau' style='text-align:center'>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">Votre probleme :</div>
                                    </div>
                                    <select id="etablisement" class="form-control" name='objet'  >
                                        <option value="">selectioner un probleme</option>
                                        <option value="DNP">DNP</option>
                                        <option value="Erreur sur le nom">Erreur sur le nom</option>
                                        <option value="Erreur sur la date de naissance">Erreur sur la date de naissance</option>
                                        <option value="Erreur d'option">Erreur d'option</option>
                                        <option value="Absence de nom">Absence de nom</option>
                                        <option value="Erreur de parcours type">Erreur de parcours type</option>
                                        <option value="Changement de parcours type">Changement de parcours type</option>
                                        <option value="Changement de filière">Changement de filière</option>
                                        <option value="Demande de certificat de scolarité">Demande de certificat de scolarité</option>
                                        <option value="Admission spécial à la session de rattrapage">Admission spécial à la session de rattrapage</option>
                                        <option value="Chevauchement de niveau d'étude">Chevauchement de niveau d'étude</option>
                                        <option value="Délivrance d'un relevé de note ou d'une attestation de réussite">Délivrance d'un relevé de note ou d'une attestation de réussite</option>
                                        <option value="Erreur de matricule">Erreur de matricule</option>
                                        <option value="Erreur/absence de la note d'examen">Erreur/absence de la note d'examen</option>
                                        <option value="Erreur/absence de la note de TP">Erreur/absence de la note de TP</option>
                                        <option value="Erreur/absence de la note de TPE">Erreur/absence de la note de TPE</option>
                                        <option value="Erreur/absence de la note de CC">Erreur/absence de la note de CC</option>
                                        <option value="Demande des équivalence">Demande des équivalence</option>
                                        <option value="Erreur sur le relevé de note">Erreur sur le relevé de note</option>
                                        <option value="Non publication de note">Non publication de note</option>
                                    </select>
                                </div>
                                <div class="col-md-6 input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">Groupe de TD :</div>
                                    </div>
                                    <input type="text" name="group_td" id="group_td" class="form-control input-group @error('group_td') is-invalid @enderror"   placeholder="entrer votre groupe de td">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="message" id="message_requete" class="form-control " value="" style="height: 186px" placeholder="Veuillez entrer votre plainte "></textarea>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">Destiniation :</div>
                                    </div>
                                    <select id="etablisement" class="form-control" name='destination'  >
                                        <option value="">selectioner une destinition</option>
                                        <option value="DNP">DNP</option>
                                        <option value="Erreur sur le nom">Erreur sur le nom</option>
                                        <option value="Erreur sur la date de naissance">Erreur sur la date de naissance</option>
                                        <option value="Erreur d'option">Erreur d'option</option>
                                        <option value="Absence de nom">Absence de nom</option>
                                        <option value="Erreur de parcours type">Erreur de parcours type</option>
                                        <option value="Changement de parcours type">Changement de parcours type</option>
                                        <option value="Changement de filière">Changement de filière</option>
                                        <option value="Demande de certificat de scolarité">Demande de certificat de scolarité</option>
                                        <option value="Admission spécial à la session de rattrapage">Admission spécial à la session de rattrapage</option>
                                        <option value="Chevauchement de niveau d'étude">Chevauchement de niveau d'étude</option>
                                        <option value="Délivrance d'un relevé de note ou d'une attestation de réussite">Délivrance d'un relevé de note ou d'une attestation de réussite</option>
                                        <option value="Erreur de matricule">Erreur de matricule</option>
                                        <option value="Erreur/absence de la note d'examen">Erreur/absence de la note d'examen</option>
                                        <option value="Erreur/absence de la note de TP">Erreur/absence de la note de TP</option>
                                        <option value="Erreur/absence de la note de TPE">Erreur/absence de la note de TPE</option>
                                        <option value="Erreur/absence de la note de CC">Erreur/absence de la note de CC</option>
                                        <option value="Demande des équivalence">Demande des équivalence</option>
                                        <option value="Erreur sur le relevé de note">Erreur sur le relevé de note</option>
                                        <option value="Non publication de note">Non publication de note</option>
                                    </select>

                                </div>
                            </div>
                            

                            <div class="row">

                                <div class="col-md-10 offset-md-10 text-right" style="text-align: right;">
                                    <div class="col-md-2 " >
                                        <button class="btn btn-primary col-md-12 col-xs-12" type='submit' >Envoyer</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

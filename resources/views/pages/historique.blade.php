@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Historique de mes Requete</div>

                <div class="card-body">

                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <h4 class="list-group-item-heading">Liste de vos requetes passées</h4>
                        </a>
                    @foreach ($requetes as $requete)
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            <h4 class="list-group-item-heading">{{$requete->objet }}</h4>
                            <p class="list-group-item-text">{{ $requete->created_at->format('j F, Y') }}</p>
                            <span class="badge badge-success badge-pill">Envoyer</span>
                            @if($requete->state == 'en cours')
                                <span class="badge badge-primary badge-pill" title="cela peux prendre plusieur jours"> Traitement : {{ $requete->state }}...</span>
                            @elseif ($requete->state == 'accordé')
                                <span class="badge badge-success badge-pill" title="Votre requete a ete accordé"> Requete : {{ $requete->state }}</span>
                            @elseif ($requete->state == 'refusé')
                                <span class="badge badge-danger badge-pill" title="votre requete a ete refusé"> Requete : {{ $requete->state }}</span>
                            @endif
                        </a>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

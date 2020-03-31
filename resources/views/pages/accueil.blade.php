<!DOCTYPE html>
<html ng-app="marequete">
<head>
    <meta name="viewport">
    <link rel="icon" type="image/png" href="/img/flavicon.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Ma Requête</title>

</head>
<body ng-controller="AdminCtrl">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Ma resuetE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
  </div>
</nav>

<div class="row menu-etudiant" style="text-align: center;justify-content: center;"> 

        <div class="widget col-md-4 bt" data-toggle="modal" data-target="#exampleModal" style="border-radius: 0;margin: 0;background-image: linear-gradient(60deg, rgb(102, 187, 106), rgb(67, 160, 71));height: 90px">
            <div class="widget_content">
                <div class="main" >
                    <span>Filter par filiere </span>
                </div>
            </div>
        </div>
        <div class="widget col-md-4 bt" data-toggle="modal" data-target="#exampleModal2" style="border-radius: 0;margin: 0;background: #9c27b0;;height: 90px">
            <div class="widget_content">
                <div class="main" >
                    <span>Filtrer par Objet </span>
                </div>
            </div>
        </div>
</div>

<div class="col-lg-8 col-sm-12 col-xs-12 offset-lg-2">
    <div class="list-group">
      <div  class="list-group-item active row titre">Liste des Requêtes <span style="font-size: 12px">( @{{requetes.length+ ' Requetes'}} )</span>
        <br>
        <input type="text" name="" class="form-control" placeholder="Rechercher un étudiant" ng-model="search" ng-change="searchmethod(filiere,search)">
      </div>

      <div class="list-group-item Student-item row col-md-12" ng-repeat="requete in requetes" style="padding: 0" >
              
        <div class="col-md-12 row" style="margin: 0 !important;padding: 0" >
            <div class="col-lg-2 col-sm-2 col-xs-2 Student-matricule">
                <img src="./img/etudint2.svg" class="etrait-img"><br>
                
                <span >@{{requete.user.matricule}}</span>
            </div>
            <div class="col-md-8">
                <label>Nom(s) & Prénom(s) : @{{requete.user.name +' '+requete.user.subname}}</label><br>
                <label>Téléphone : @{{requete.user.telephone}}</label><br>
                <label>Email : @{{requete.user.email}}</label>
            </div>
            <div class="col-md-2" style="background-color: #40DFFC;text-align: center;font-weight: bold;color: white;">
                <br><br>
                @{{requete.user.filiere}}
            </div> 
        </div> 




      </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Filtrer par Filiere</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Appliquée</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Filtrer par Objet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Appliquée</button>
      </div>
    </div>
  </div>
</div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/res/angular.min.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
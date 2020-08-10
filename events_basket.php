<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Tournoi de Basket</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- FontAwesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

</head>

<body>

    <?php include('include/nav.php')?>

    <div class="header_img">
    <div class="d-flex align-items-end justify-content-center" style="height:250px;"><h2 class="header_text display-2 text-white"><strong>Tournoi de Basket</strong></h2></div>
  </div>

  <!-- port du masque obligatoire -->

  <div class="container mask-1">
    <div class="mask mt-3 w-100 d-flex justify-content-between"><p class="mask_text mx-auto my-auto w-50 m-2 text-center text-danger">Pour la sécurité de tous, le port du masque est obligatoire ainsi que le respect des gestes barrières</p><img class="m-2 mask_img" style="" src="img/mask.webp"></div>
  </div>

  <div class="row w-100 text-center">
      <div class="col-xl-6 col-mb-10 order-xl-3 order-4 p-0 m-auto">
        <img class="evenementimg evenementimg-1 img-fluid d-block" src="img/capture_rde/basket.png">
      </div>
      <div class="col-xl-6 col-mb-10 order-xl-4 order-3 my-auto p-0 m-0">
        <h2 class="text-center policetitres mt-5">Tournoi de Basket</h2>
        <div class="w-75 mx-auto">
          <p class="policep">Venez défendre les couleurs de votre école !
                        <br><br>
                        (5 à 7 participants)<br><br>
                        Ce tournoi de basket inter-établissements a pour but de contribuer à développer l’esprit étudiant au sein de la Ville de Charleville-Mézières et à faire reconnaître l’identité universitaire.
                        <br><br>
                        Ce tournoi est un évènement fédérateur réservé aux étudiants issus d’un des établissements d’enseignement supérieur du territoire de Ardenne Métropole.
                        <br><br>
                        Pour cette occasion, la salle Arena, salle de basket ball de Charleville-Mézières, sera mise à disposition des étudiants participants.<p class="mb-5">
        </div>
      </div>
    </div>

    <div data-bs-parallax-bg="true" class="backgroundimages" style="height:auto; padding-bottom: 30px; background-image: url(img/gacolor.jpeg);">
    <div class="showeventcarac" id="compteur">
        <h2 class=" policetitres text-center mt-5 text-shadow" style="color: white;">Caractéristiques</h2>
        <div class="row w-100 mt-5">
          <div class="col-xs-6 col-md-6 col-lg-6 col-xl-4">
              <div class="rounded-circle mx-auto my-auto">
                  <p class="text-center policetitres-proginc color-yellow-light">Date</p>
                  <p class="text-center policep" style="color: white; font-size: 1.5rem;"><strong><span id="compteur1">25</span>/<span id="compteur2">09</span>/20<span id="compteur3">20</span></strong></p>
              </div>
          </div>
            <div class="col-xs-6 col-md-6 col-lg-6 col-xl-4 mb-1">
                <div class="rounded-circle mx-auto my-auto">
                    <p class="text-center policetitres-proginc color-yellow-light">Horaires</p>
                    <p class="text-center policep" style="color: white; font-size: 1.5rem;"><strong><span id="compteur4">17</span>h<span id="compteur5">30</span></strong></p>
                </div>
            </div>
            <div class="col-xs-6 col-md-6 col-lg-6 col-xl-4 mb-1">
                <div class="rounded-circle mx-auto my-auto">
                    <p class="text-center policetitres-proginc color-yellow-light">Lieu</p>
                    <p class="text-center policep" style="color: white; font-size: 1.5rem;"><strong>Salle Arena</strong></p>
                </div>
            </div>
        </div>
    </div></div>

    
    <div class="container-fluid my-5">
        <div class="row w-100 mb-5 mb-xl-0">
            <div class="txt_faq col-xl-6 col-mb-10 order-2 p-0 m-auto">
            <div class="d-flex align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6"><img src="img/mascotte_montre.png" style="width:100%;"></div>
                <a class="btn-sinscrire" href="event_register_basket.php"><button class="btn btn-secondary"><h2 class="policetitres" style="color: var(--color-yellow-middle); margin-bottom: 0!important;">S'inscrire</h2></button></a>
            </div>
            </div>
        </div>
    </div>
    <?php include('include/parallax.php')?>

    <div class="row my-4 justify-content-center align-items-center w-100 mx-auto">
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/capture_rde/express_3.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Express</p>
        <hr class="style-five">
        <div class="dropdown">
        <center><a href="events_express.php" class="btn btn-secondary mb-2">Détails</a></center>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/capture_rde/warrior_11.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Warrior</p>
        <hr class="style-five">
        <center><a href="events_warrior.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div>
    <!-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/capture_rde/cuisine.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Concours De Cuisine</p>
        <hr class="style-five">
        <center><a href="events_cuisine.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div> -->
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/7.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Pique-Nique</p>
        <hr class="style-five">
        <center><a href="events_pique-nique.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div>
    <!-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/bal.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Bal de rentrée</p>
        <hr class="style-five">
        <center><a href="events_bal.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/gacolor.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Gacolor</p>
        <hr class="style-five">
        <center><a href="events_gacolor.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/escape.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Escape Game</p>
        <hr class="style-five">
        <center><a href="events_escape.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div> -->
  </div>

    <?php include('include/footer.php')?>


    <script src="./assets/js/noframework.waypoints.min.js"></script>
    <script type="text/javascript">

function gocompteur(startcount, endcount, duration, idTarget) {

    var b = endcount; // Nombre final du compteur
    var ctb = startcount; // Initialisation du compteur
    var bravo = Math.ceil((duration * 1000) / b); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
    var nodes = document.getElementById(
        idTarget); // On récupère notre noeud où sera rafraîchi la valeur du compteur

    function countdown2() {
        nodes.innerHTML = ++ctb;
        if (ctb < b) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
            setTimeout(countdown2, bravo);
        }
    }

    setTimeout(countdown2, bravo);

}

var waypoint1 = new Waypoint({
  element: document.getElementById('compteur1'),
  handler: function(direction) {
        gocompteur(0,23,1.4,"compteur1");
  },
  offset: 'bottom-in-view' 
})

var waypoint2 = new Waypoint({
  element: document.getElementById('compteur2'),
  handler: function(direction) {
        gocompteur(0,9,0.9,"compteur2");
  },
  offset: 'bottom-in-view' 
})

var waypoint3 = new Waypoint({
  element: document.getElementById('compteur3'),
  handler: function(direction) {
        gocompteur(0,20,1,"compteur3");
  },
  offset: 'bottom-in-view' 
})

var waypoint4 = new Waypoint({
  element: document.getElementById('compteur4'),
  handler: function(direction) {
        gocompteur(0,17,0.7,"compteur4");
  },
  offset: 'bottom-in-view' 
})

var waypoint5 = new Waypoint({
  element: document.getElementById('compteur5'),
  handler: function(direction) {
        gocompteur(0,30,1.2,"compteur5");
  },
  offset: 'bottom-in-view' 
})

</script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
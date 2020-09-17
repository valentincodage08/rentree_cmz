<?php include('include/connexiondbval.php'); ?>
<!doctype html>
<html lang="fr">

<!-- Revolution includes -->
<?php include('include/revolution_head.php'); ?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">

<!-- Fonts CSS -->
<link href="https://fonts.googleapis.com/css?family=Bangers|Days+One&display=swap" rel="stylesheet">

<!-- FontAwesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

<link rel="stylesheet" href="assets/css/style.css">

<script src="assets/js/jquery.countdown.min.js"></script>

<title>Rentrée des étudiants - CMZ</title>
</head>

<body>
<!-- Preloader visuel -->
<div class="spinner-wrapper">
  <div class="sk-chase">
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
  </div>
</div>

  <script>
    var navCloud = true;
  </script>
  <?php include('include/nav.php') ?>

  <!-- <div class="animindex bg-azur-light height-big text-center">Animation Slider</div> -->
  <?php include('include/slider2.php'); ?>

  <!-- port du masque obligatoire -->

  <div class="container mask-1">
    <div class="mask mt-3 w-100 d-flex justify-content-between"><p class="mask_text mx-auto my-auto w-50 m-2 text-center text-danger">Pour la sécurité de tous, le port du masque est obligatoire ainsi que le respect des gestes barrières</p><img class="m-2 mask_img" style="" src="img/mask.webp"></div>
  </div>

  <!-- Texte RDE / Evenements -->

  <div id="evenements" class="container-fluid my-5">
    <div class="row w-100 mb-5 mb-xl-0">
      <div class="col-xl-6 my-auto col-mb-10 order-1 p-0 m-0">
        <h2 class="text-center policetitres">Quésaco ?</h2>
        <div class="w-75 mx-auto"><center>
          <p class="policep indentp">A l'initiative de la Ville de Charleville-Mézières et en partenariat avec les associations étudiantes, la Rentrée des étudiants vise à souhaiter la bienvenue à tous les étudiants du territoire. Cet événement est une occasion festive, ludique, sportive et culturelle de découvrir la ville, de rencontrer d'autres étudiants issus des différents établissements du territoire et d’affirmer notre ambition étudiante. </p>

          <p class="policep indentp">Ainsi, nous vous proposons cette année une <strong>Rentrée des étudiants</strong> avec les incontournables Carolo Express, Carolo Warrior mais également la présence de structures gonflables sur la Place Ducale, la remise des chéquiers étudiant…</p>

          <p class="policep indentp">Charleville-Mézières sera 100% festive, 100% étudiante !</p>
        </div>
      </div>
      <div class="col-xl-6 col-mb-10 order-2 p-0 m-auto">
        <img class="evenementimg evenementimg-2 img-fluid d-block" src="img/capture_rde/express_3.png">
      </div>
    </div>
  

  
    <div class="row w-100 mb-5  mt-5 mt-xl-0">
      <div class="col-xl-6 col-mb-10 order-xl-3 order-4 p-0 m-auto">
        <img class="evenementimg evenementimg-1 img-fluid d-block" src="img/capture_rde/warrior_10.png">
      </div>
      <div class="col-xl-6 col-mb-10 order-xl-4 order-3 my-auto p-0 m-0">
        <h2 class="text-center policetitres">Qui ? Quand ? Où ?</h2>
        <div class="w-75 mx-auto"><center>
          <p class="policep indentp"><strong>La Rentrée des étudiants</strong> est proposée à tous les étudiants du territoire de Charleville-Mézières jusqu’à Sedan. </p>
          <p class="policep indentp">Tous les étudiants qui entament ou poursuivent une formation post bac sur le territoire peuvent participer à cette manifestation.</p>

          <p class="policep indentp"><strong>La Rentrée des étudiants</strong> 2020 aura lieu le jeudi 24 septembre avec, pour commencer, le « Carolo Express ».</p>

          <p class="policep indentp  mb-5 mb-xl-0">Toutes les manifestations de l’édition 2020 se dérouleront à Charleville-Mézières mais également à la Plaine du Mont Olympe (voir programme).</p></center>
        </div>
      </div>
    </div>
  </div>

  <div id="videoaccueil"></div>
  <?php include ('include/video.php'); ?>
  
  
  <!-- Image / Motif / Editions -->
  
  <div class="container-fluid testi-back" style="background-image: url(img/gacolor.jpeg);">
    <div class="row motifimg h-100">
      <!-- Carousel Testimonials -->
      <div id="carouseltestimonials" class="carousel slide" data-ride="carousel"  data-interval="3500"
        style=" font-size:1.8em;width:80%;">
        <div class="carousel-inner">
      
                <div class="carousel-item mt-4 mb-4">
                  <div class="row d-flex my-auto">
                    <div class="col-2"></div>
                    <div class="col-2 carou_img my-auto">
                      <img src="img/logoetudiantcarolo_bleu.png" class="d-block w-100 my-auto">
                    </div>
                    <div class="col-1"></div>
                    <div class="testi-text col-md-12 col-lg-5 align-self-center" style="width:90%;border-width:2px;border-style:solid;border-color:#0C276A;background-color:rgba(255,255,255, .7);border-radius:5px;box-shadow: 0px 0px 30px #2337D2 inset;">
                    <center><p class="testiresponsif"><strong>Isa Brangantini – GACO / IUT RCC</strong></p><p class="testiresponsifmini mb-2">« Carolo express, Carolo Warrio, concours de cuisine, activités sur la Place Ducale… j’ai participé à toutes les activités. C’était une journée TOP, j’en garde de très bons souvenirs et encourage tous les étudiants à y participer nombreux. »</p></center>
                    </div>
                  </div>
                </div>

                <div class="carousel-item mt-4 mb-4">
                  <div class="row d-flex my-auto">
                    <div class="col-2"></div>
                    <div class="col-2 carou_img my-auto">
                      <img src="img/logoetudiantcarolo_bleu.png" class="d-block w-100 my-auto">
                    </div>
                    <div class="col-1"></div>
                    <div class="testi-text col-md-12 col-lg-5 align-self-center" style="width:90%;border-width:2px;border-style:solid;border-color:#0C276A;background-color:rgba(255,255,255, .7);border-radius:5px;box-shadow: 0px 0px 30px #2337D2 inset;">
                    <center><p class="testiresponsif"><strong>Hicham Kallouche – GACO / IUT RCC</strong></p><p class="testiresponsifmini mb-2">« Evénement bien organisé avec de nombreuses activités toute la journée. Il y en a pour tous les goûts ! »</p></center>
                    </div>
                  </div>
                </div>

                <div class="carousel-item mt-4 mb-4">
                  <div class="row d-flex my-auto">
                    <div class="col-2"></div>
                    <div class="col-2 carou_img my-auto">
                      <img src="img/logoetudiantcarolo_bleu.png" class="d-block w-100 my-auto">
                    </div>
                    <div class="col-1"></div>
                    <div class="testi-text col-md-12 col-lg-5 align-self-center" style="width:90%;border-width:2px;border-style:solid;border-color:#0C276A;background-color:rgba(255,255,255, .7);border-radius:5px;box-shadow: 0px 0px 30px #2337D2 inset;">
                    <center><p class="testiresponsif"><strong>Adeline Guillaume – INSPE / URCA</strong></p><p class="testiresponsifmini mb-2">« J’étais dans l’équipe de l’INSPE pour le Carolo Warrior. Bel après-midi autour de nombreuses activités sportives ! Pas nécessaire d’être un grand ou une grande sportive. C’est à la portée de toutes et tous. Ce faisant, n’hésitez pas.. Foncez, inscrivez-vous ! »</p></center>
                    </div>
                  </div>
                </div>

                <div class="carousel-item mt-4 mb-4">
                  <div class="row d-flex my-auto">
                    <div class="col-2"></div>
                    <div class="col-2 carou_img my-auto">
                      <img src="img/logoetudiantcarolo_bleu.png" class="d-block w-100 my-auto">
                    </div>
                    <div class="col-1"></div>
                    <div class="testi-text col-md-12 col-lg-5 align-self-center" style="width:90%;border-width:2px;border-style:solid;border-color:#0C276A;background-color:rgba(255,255,255, .7);border-radius:5px;box-shadow: 0px 0px 30px #2337D2 inset;">
                    <center><p class="testiresponsif"><strong>Sami Benbekkou – GACO / IUT RCC</strong></p><p class="testiresponsifmini mb-2">« Très belle journée qui a, je pense, fédéré les étudiants entre eux ! Aussi, la remise de récompenses et la signature de la charte « Etudiants Responsables » sont des excellentes initiatives. »</p></center>
                    </div>
                  </div>
                </div>

                <div class="carousel-item mt-4 mb-4">
                  <div class="row d-flex my-auto">
                    <div class="col-2"></div>
                    <div class="col-2 carou_img my-auto">
                      <img src="img/logoetudiantcarolo_bleu.png" class="d-block w-100 my-auto">
                    </div>
                    <div class="col-1"></div>
                    <div class="testi-text col-md-12 col-lg-5 align-self-center" style="width:90%;border-width:2px;border-style:solid;border-color:#0C276A;background-color:rgba(255,255,255, .7);border-radius:5px;box-shadow: 0px 0px 30px #2337D2 inset;">
                    <center><p class="testiresponsif"><strong>Flavie MASSE – GACO / IUT RCC</strong></p><p class="testiresponsifmini mb-2">« J’ai vraiment apprécié toutes les manifestations de la Rentrée des étudiants. Je n’ai pas participé aux activités mais j’ai soutenu les équipes de mon école toute la journée. Le pique-nique collectif le midi est vraiment sympa ainsi que la remise du chéquier étudiant à tout le monde. Bonne organisation. A refaire sans hésitation… »</p></center>
                    </div>
                  </div>
                </div>

                <div class="carousel-item mt-4 mb-4">
                  <div class="row d-flex my-auto">
                    <div class="col-2"></div>
                    <div class="col-2 carou_img my-auto">
                      <img src="img/logoetudiantcarolo_bleu.png" class="d-block w-100 my-auto">
                    </div>
                    <div class="col-1"></div>
                    <div class="testi-text col-md-12 col-lg-5 align-self-center" style="width:90%;border-width:2px;border-style:solid;border-color:#0C276A;background-color:rgba(255,255,255, .7);border-radius:5px;box-shadow: 0px 0px 30px #2337D2 inset;">
                    <center><p class="testiresponsif"><strong>Pierre Mabilat – HSE / IUT RCC</strong></p><p class="testiresponsifmini mb-2">« J’ai participé au Carolo Warrior ! Cette activité a permis d’intégrer tous les nouveaux étudiants de Charleville-Mézières, de créer de la cohésion entre les filières tout en apportant une touche de compétition. Je recommande à tous les étudiants de participer à la Rentrée des étudiants »</p></center>
                    </div>
                  </div>
                </div>

                <div class="carousel-item mt-4 mb-4">
                  <div class="row d-flex my-auto">
                    <div class="col-2"></div>
                    <div class="col-2 carou_img my-auto">
                      <img src="img/logoetudiantcarolo_bleu.png" class="d-block w-100 my-auto">
                    </div>
                    <div class="col-1"></div>
                    <div class="testi-text col-md-12 col-lg-5 align-self-center" style="width:90%;border-width:2px;border-style:solid;border-color:#0C276A;background-color:rgba(255,255,255, .7);border-radius:5px;box-shadow: 0px 0px 30px #2337D2 inset;">
                    <center><p class="testiresponsif"><strong>Sofiane Brahimi – HSE / IUT RCC</strong></p><p class="testiresponsifmini mb-2">« Je recommande à 100% ! J’ai, pour ma part, participé au Carolo Express. Cette activité de groupe m’a permis de découvrir de nombreux lieux que je ne connaissais pas. Cette journée est une bonne occasion de brasser les étudiants entre eux. Si c’était à refaire, ce serait un grand OUI pour moi ! »</p></center>
                    </div>
                  </div>
                </div>

                <div class="carousel-item mt-4 mb-4">
                  <div class="row d-flex my-auto">
                    <div class="col-2"></div>
                    <div class="col-2 carou_img my-auto">
                      <img src="img/logoetudiantcarolo_bleu.png" class="d-block w-100 my-auto">
                    </div>
                    <div class="col-1"></div>
                    <div class="testi-text col-md-12 col-lg-5 align-self-center" style="width:90%;border-width:2px;border-style:solid;border-color:#0C276A;background-color:rgba(255,255,255, .7);border-radius:5px;box-shadow: 0px 0px 30px #2337D2 inset;">
                    <center><p class="testiresponsif"><strong>Jeannelle COUTEL – HSE / IUT RCC</strong></p><p class="testiresponsifmini mb-2">« J’étais de toutes les épreuves. Très belle initiatives de la Ville d’organiser cette journée dédiée aux étudiants. C’est une belle occasion de rencontrer d’autres étudiants, de découvrir la ville autrement, de gagner des lots sympa pour les meilleurs et tout simplement montrer que Charleville-Mézières est aussi une ville étudiante dynamique »</p></center>
                    </div>
                  </div>
                </div>

                <div class="carousel-item mt-4 mb-4">
                  <div class="row d-flex my-auto">
                    <div class="col-2"></div>
                    <div class="col-2 carou_img my-auto">
                      <img src="img/logoetudiantcarolo_bleu.png" class="d-block w-100 my-auto">
                    </div>
                    <div class="col-1"></div>
                    <div class="testi-text col-md-12 col-lg-5 align-self-center" style="width:90%;border-width:2px;border-style:solid;border-color:#0C276A;background-color:rgba(255,255,255, .7);border-radius:5px;box-shadow: 0px 0px 30px #2337D2 inset;">
                    <center><p class="testiresponsif"><strong>Clément Vautrin – GACO / IUT RCC</strong></p><p class="testiresponsifmini mb-2">« J’ai adoré le Carolo Warrior, un raid sportif à faire en groupe ! C’est accessible à tous. Donc, il ne faut pas hésiter et y participer ! »</p></center>
                    </div>
                  </div>
                </div>

                <div class="carousel-item mt-4 mb-4">
                  <div class="row d-flex my-auto">
                    <div class="col-2"></div>
                    <div class="col-2 carou_img my-auto">
                      <img src="img/logoetudiantcarolo_bleu.png" class="d-block w-100 my-auto">
                    </div>
                    <div class="col-1"></div>
                    <div class="testi-text col-md-12 col-lg-5 align-self-center" style="width:90%;border-width:2px;border-style:solid;border-color:#0C276A;background-color:rgba(255,255,255, .7);border-radius:5px;box-shadow: 0px 0px 30px #2337D2 inset;">
                    <center><p class="testiresponsif"><strong>Alicia Vilvandre – HSE / IUT RCC</strong></p><p class="testiresponsifmini mb-2">« Je me suis inscrite au Concours de cuisine. Très sympa de jouer à la Top chef au milieu de la Place Ducale. Bonne ambiance et la journée m’a permis de rencontrer d’autres étudiants que je ne connaissais pas encore »</p></center>
                    </div>
                  </div>
                </div>

          <a class="carousel-control-prev" href="#carouseltestimonials" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
          </a>
          <a class="carousel-control-next" href="#carouseltestimonials" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
          </a>
        </div>
      </div>

    </div>
  </div>

  <div class="container-fluid mt-2 mb-5 pr-5 pl-5 persp">
    <h2 class="text-center policetitres mt-3 mb-3">EDITION 2019</h2>
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-3 p-2 my-auto"><div class="polaroid mx-auto">
        <a class="" href="event.php#galerie"><img class="img-fluid" src="img/capture_rde/warrior_11.png"></a>
        <p class="policep text-center">Carolo Warrior</p>
      </div></div>
      <div class="col-12 col-sm-6 col-lg-3 p-2 my-auto"><div class="polaroid mx-auto">
        <a class="" href="event.php#galerie"><img class="img-fluid" src="img/capture_rde/express_3.png"></a>
        <p class="policep text-center">Carolo Express</p>
      </div></div>
      <div class="col-12 col-sm-6 col-lg-3 p-2 my-auto"><div class="polaroid mx-auto">
        <a class="" href="event.php#galerie"><img class="img-fluid" src="img/capture_rde/cuisine.png"></a>
        <p class="policep text-center">Concours de Cuisine</p>
      </div></div>
      <div class="col-12 col-sm-6 col-lg-3 p-2 my-auto"><div class="polaroid mx-auto">
        <a class="" href="event.php#galerie"><img class="img-fluid" src="img/event_2019/7.png"></a>
        <p class="policep text-center">Pique-Nique</p>
      </div></div>
    </div>
  </div>

  <!-- Page d'acceuil content end -->

  <?php include ('include/parallax.php'); ?>

  <?php include('include/footer.php')?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
<script>
  $(document).ready(function() {
  //Preloader
  preloaderFadeOutTime = 500;
  function hidePreloader() {
  var preloader = $('.spinner-wrapper');
  preloader.fadeOut(preloaderFadeOutTime);
  }
  hidePreloader();
  });
</script>

<!-- Script qui prend l'itération du carousel testimonials, et ajoute la classe active sur chaque -->
<script>
  $(document).ready(function () {
    $('#carouseltestimonials').find('.carousel-item').first().addClass('active');
  });
</script>

</body>

</html>
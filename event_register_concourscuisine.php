<?php include('include/connexiondbval.php'); ?>

<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Inscription Concours de Cuisine</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- FontAwesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

</head>

<body>


  <?php include('include/nav.php')?>
  <!-- Evenement register content -->


  <!-- img event -->

  <div class="header_img">
    <div class="d-flex align-items-end justify-content-center" style="height:250px;"><h2 class="header_text display-2 text-white"><strong>Concours de Cuisine</strong></h2></div>
  </div>

  <!-- Success -->
  <?php if(isset($_GET['success'])){
  if($_GET['success'] == 1 ) {?><br><br>
    <center><div class="alert alert-success" role="alert">
      Votre inscription a bien été prise en compte, vous allez recevoir un mail de confirmation.
    </div></center>
  <?php } ?>
  <?php if($_GET['success'] == 2 ) {?><br><br>
    <center><div class="alert alert-danger" role="alert">
    Au moins un des deux mails n'a pas été entré ou confirmé correctement.
    </div></center>
  <?php } ?>
  <?php if($_GET['success'] == 3 ) {?><br><br>
    <center><div class="alert alert-danger" role="alert">
      Ce nom d'équipe est déjà pris, veuillez en choisir un autre.
    </div></center>
  <?php } ?>
  <?php if($_GET['success'] == 4 ) {?><br><br>
    <center><div class="alert alert-danger" role="alert">
      On ne joue pas avec l'URL petit malin !! Et non il n'y a vraiment plus de places 
    </div></center>
  <?php }} ?>

  <!-- Formumaire -->

  <section class="get-in-touch container-lg">
    <h1 class="title">Inscription Concours de cuisine</h1><br>

    <?php
        $req = $bdd->prepare("SELECT * FROM rdecuisineregister");
        $req->execute();
        $placescount = $req->rowCount();
        $placesrestantes = 10 - $placescount;
        $req->closeCursor();

      ?>
<?php if ($placesrestantes == 1) {?>
      <h2 class="title2 mt-3">Vite, il ne reste de la place que pour <?= $placesrestantes ?> équipe!</h2>
<?php } elseif ($placesrestantes == 0) {?>
      <h2 class="title2 mt-3">Toutes les places sont prises, vous ne pourrez plus vous inscrire</h2>
<?php } else {?>
      <h2 class="title2 mt-3">Vite, il reste de la place pour <?= $placesrestantes ?> équipes</h2>
<?php } ?>

    <h2 class="title2 mt-3">Etablissement</h2>
    <form id="inscription" class="contact-form row w-100 justify-content-center" action="include/cuisineregister.php" method="post">
      <div class="form-field col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7">
        <center><select class="custom-select" name="etablissement" id="etablissement-font-5" required>
            <option value="" disabled selected>Veuillez choisir un établissement</option>
            <option value="IUTRCC">Institut Universitaire de Technologie (IUT RCC)</option>
            <option value="EiSINe">Ecole d’Ingénieurs en Sciences Industrielles et Numérique (EiSINe)</option>
            <option value="INSPE">Institut national Supérieur du Professorat et de l’Education (INSPÉ)</option>
            <option value="EGC">Ecole de gestion et de commerce (EGC)</option>
            <option value="SIMPLON">Ecole Simplon</option>
            <option value="SCBS">SCBS – Y Schools</option>
            <option value="ISCEE">Institut supérieur de comptabilité et d’économie des entreprises (ISCEE)</option>
            <option value="ESNAM">Ecole supérieure nationale des Arts de la marionnettes (ESNAM)</option>
            <option value="IFSI">Institut de formation en soins infirmiers (IFSI)</option>
            <option value="CFAI">Centre de formation des apprentis de l’industrie (CFAI)</option>
            <option value="LABDA">Lycée agricole Balcon des Ardennes</option>
            <option value="LDMDB">Lycée des métiers de Bazeilles</option>
            <option value="LMDS">Lycée Sévigné</option>
            <option value="LDMB">Lycée des métiers Bazin</option>
            <option value="LM">Lycée Monge</option>
            <option value="LJBC">Lycée JB Clément</option>
            <option value="LPB">Lycée Pierre Bayle</option>
            <option value="LSV">Lycée Simone Veil</option>
            <option value="IFAG">IFAG</option>
          </select></center>
      </div>
      <div class="contact-form row w-100 justify-content-center">
        <div class="col-12 form-field">
          <h2 class="title2">Nom de l'équipe (à votre choix)</h2>
        </div>
      </div>
      <div class="contact-form row w-100 justify-content-center">
        <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
          <input id="name" class="input-text js-input" name="teamname" type="text" required>
          <label class="label" for="name">Nom d'équipe</label>
        </div>
      </div>

      <div class="container-fluid mt-5">
        <div class="row justify-content-center">
          <ul class="nav nav-tabs" id="register" role="tablist">
            <li class="nav-item mr-2">
              <a class="nav-link active" id="part1" data-toggle="tab" href="#register1" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Participant 1</p><p class="tabgalerietxt inscripmobile">1</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="part2" data-toggle="tab" href="#register2" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Participant 2</p><p class="tabgalerietxt inscripmobile">2</p></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="mb-5"></div>
        <div class="row justify-content-center">
          <div class="tab-content" id="myTabContent">
            <!-- Tabs participants -->
            <div class="tab-pane fade show active" id="register1" role="tabpanel" aria-labelledby="register1-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3">Participant 1</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="name1" class="input-text js-input" type="text" required>
                      <label class="label">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="firstname1" class="input-text js-input" type="text" required>
                      <label class="label">Prénom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="tel1" class="input-text js-input" type="tel" minlength="10" maxlength="10" required>
                      <label class="label">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="mail1" class="input-text js-input" type="email" required>
                      <label class="label">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="verifmail1" class="input-text js-input" type="email" required>
                      <label class="label">Veuillez resaisir votre email</label>
                    </div>
                  </div>
                  <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 d-flex justify-content-center">
                    <a class="btn submit-btn next" style="width:8rem;border-radius:15px;text-decoration:none;" role="button" href="#register2">Suivant</a>
                  </div>
                </div>
              </div>
            </div>


            <div class="tab-pane fade show" id="register2" role="tabpanel" aria-labelledby="register2-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3 text-center">Participant 2</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="name2" class="input-text js-input" type="text" required>
                      <label class="label">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="firstname2" class="input-text js-input" type="text" required>
                      <label class="label">Prénom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="tel2" class="input-text js-input" type="tel" minlength="10" maxlength="10" required>
                      <label class="label">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="mail2" class="input-text js-input" type="email" required>
                      <label class="label">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="verifmail2" class="input-text js-input" type="email" required>
                      <label class="label">Veuillez resaisir votre email</label>
                    </div>
                  </div>
                  <?php if ($placesrestantes > 0) {?>
                  <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 d-flex justify-content-center">
                    <a class="btn submit-btn previous" style="width:8rem;border-radius:15px;text-decoration:none;" role="button" href="#register1">Précédent</a>
                  </div>
                  <div class="form-field col-12">
                    <center><input class="submit-btn" type="submit" value="Valider"></center>
                  </div>
                  <?php } else { ?>
                    <div class="form-field col-12">
                    <center><h3 class="title2 mt-3">Il n'y a plus de places</h3></center>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>

  <!-- Parrallaxe -->
  <?php include('include/parallax.php')?>

  <!-- Event Cards -->


  <div class="row my-4 justify-content-center align-items-center w-100 mx-auto">
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/capture_rde/express_3.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Express</p>
        <hr class="style-five">
        <div class="dropdown">
        <center><a href="event_register_caroloexpress.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/bal.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Bal de Rentrée</p>
        <hr class="style-five">
        <center><a href="event_register_bal.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/capture_rde/warrior_11.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Warrior</p>
        <hr class="style-five">
        <center><a href="event_register_carolowarrior.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/7.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Pique-Nique</p>
        <hr class="style-five">
        <center><a href="event_register_piquenique.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/capture_rde/basket_2.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Tournoi de Basket</p>
        <hr class="style-five">
        <center><a href="event_register_basket.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/gacolor.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Gacolor</p>
        <hr class="style-five">
        <center><a href="event_register_gacolor.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/escape.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Escape Game</p>
        <hr class="style-five">
        <center><a href="event_register_escape.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
  </div>


  <!-- Event register content end -->
  <?php include('include/footer.php')?>

  <!-- Script pour suivant / précédent les tabs -->
  <script>
      $('.next').click(function () {
        $('.nav-tabs > .nav-item > .active').parent().next('li').find('a').trigger('click');
      });

      $('.previous').click(function () {
          $('.nav-tabs > .nav-item > .active').parent().prev('li').find('a').trigger('click');
      });
    </script>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</body>

</html>
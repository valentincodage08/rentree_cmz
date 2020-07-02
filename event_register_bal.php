<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Inscription Bal de rentée</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- FontAwesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

</head>

<body>


    <?php include('include/nav.php')?>
    <!-- Evenement register content -->


     <!-- img event -->

     <div class="header_img">
    <div class="d-flex align-items-end justify-content-center" style="height:250px;"><h2 class="header_text display-2 text-white"><strong>Bal de Rentrée</strong></h2></div>
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
  <?php }} ?>

    <!-- Formulaire -->

    <section class="get-in-touch container-lg">
    <h1 class="title">Inscription bal de rentrée</h1><br>
    <form id="inscription" class="contact-form row w-100 justify-content-center" action="include/balregister.php" method="post">
      <div class="mb-5"></div>
        <div class="row justify-content-center">
          <div class="tab-content" id="myTabContent">
            <!-- Tabs participants -->
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3">Participant</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="name" class="input-text js-input" type="text" tabindex="1" required>
                      <label class="label">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="firstname" class="input-text js-input" type="text" tabindex="2" required>
                      <label class="label">Prénom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="tel" class="input-text js-input" type="text" tabindex="3" required>
                      <label class="label">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="mail" class="input-text js-input" type="email" tabindex="4" required>
                      <label class="label">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="verifmail" class="input-text js-input" type="email" tabindex="5" required>
                      <label class="label">Veuillez resaisir votre email</label>
                    </div>
                  </div>
                  <div class="form-field col-12">
                    <center><input class="submit-btn" type="submit" value="Valider"></center>
                  </div>
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
        <img class="img-fluid" src="img/capture_rde/warrior_11.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Warrior</p>
        <hr class="style-five">
        <center><a href="event_register_carolowarrior.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/capture_rde/cuisine.png">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Concours De Cuisine</p>
        <hr class="style-five">
        <center><a href="event_register_concourscuisine.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>
</body>

</html>
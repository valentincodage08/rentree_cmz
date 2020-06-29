<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Connexion</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                <?php if(isset($_GET['success'])){
                if($_GET['success'] == 1) {?>
                    <div class="alert alert-danger" role="alert">
                    Vos identifiants sont incorrects, en cas d'oubli de votre nom d'équipe ou de votre mot de passe merci de vous rapprocher de l'organisation.
                    </div>
                <?php }} ?>
                    <center><img src="img/logomairieCM.png" class="mb-5" style="height:125px;"></center>
                    <form action="traitements/connexion.php" method="POST">
                        <div class="form-group"><label class="text-secondary">Nom d'équipe</label><input class="form-control" name="teamname" type="text" required inputmode="email"></div>
                        <div class="form-group"><label class="text-secondary">Mot De Passe</label><input class="form-control" name="password" type="password" required></div>
                        <center><button class="btn btn-info mt-2" type="submit">Se Connecter</button></center>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;img/gacolor.jpeg&quot;);background-size:cover;background-position:center center;">
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
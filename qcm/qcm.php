<?php session_start();?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Express</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color:#0062AD">
    <div class="container-fluid">
        <div class="w-75 mx-auto border rounded m-5 d-flex flex-column justify-content-between align-items-center" style="background-color:white;box-shadow:0 0 1em white;">
            <div class="progress w-75 m-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            </div>
            <?php if(isset($_GET['success'])) {
                if($_GET['success'] == 1) {?>
                    <div class="alert alert-danger" role="alert">
                    Votre code est faux, merci de réessayer.
                    </div>
                <?php } if($_GET['success'] == 2) {?>
                    <div class="alert alert-danger" role="alert">
                    Vous avez déjà effectué le quizz pour cet emplacement.
                    </div>
                <?php } if($_GET['success'] == 3) {?>
                    <div class="alert alert-success" role="alert">
                    Vos points ont été enregistrés, vous pouvez continuer la course!
                    </div>
            <?php }} ?>
            <div class="etape">
                <h2 class="h4">
                    <span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        Étape <span class="cStep">1</span> / <span class="mStep">5</span>
                    </span>
                </h2>
            </div>
            <div class="logo m-2"><img src="../img/logoetudiantcarolo_bleu.png"
                    style="width:150px;height:auto;"></div>
            <form action="traitements/codes.php" method="post">
                <div class="form text-center m-2"><input type="text" name="code"><button type="submit"
                        class="btn btn-primary m-2">Valider</button></div>
            </form>
        </div>
    </div>

    <div class="maps mt-5 mx-auto" style="width:85%;">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1EWmjwCaoJ6LaRPnHiKMLUj_26w6ogDTj" width="100%" height="550"></iframe>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>
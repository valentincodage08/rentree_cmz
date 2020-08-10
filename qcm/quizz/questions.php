<?php
session_start();
include ('../../include/connexiondbval.php');
$team = $_SESSION['team'];
if (isset($_GET['token'])) {

    if($_GET['token'] == "4225") {
        $emplacement = "hotel de ville";
    } elseif($_GET['token'] == "1930") {
        $emplacement = "tour du roy";
    } elseif($_GET['token'] == "2908") {
        $emplacement = "basilique notre-dame d esperance";
    } elseif($_GET['token'] == "1100") {
        $emplacement = "la macerienne";
    } elseif($_GET['token'] == "9909") {
        $emplacement = "le square mialeret";
    } elseif($_GET['token'] == "1202") {
        $emplacement = "atelier d henri louis";
    } elseif($_GET['token'] == "1403") {
        $emplacement = "theatre municipal";
    } elseif($_GET['token'] == "5645") {
        $emplacement = "grand marionnettiste";
    } elseif($_GET['token'] == "0904") {
        $emplacement = "rue du moulin";
    } elseif($_GET['token'] == "7812") {
        $emplacement = "fresque ophelie";
    } elseif($_GET['token'] == "5151") {
        $emplacement = "musee de l ardenne";
    } elseif($_GET['token'] == "9632") {
        $emplacement = "maison des ailleurs";
    } elseif($_GET['token'] == "1515") {
        $emplacement = "mairie";
    } elseif($_GET['token'] == "3637") {
        $emplacement = "rue beregovoy";
    } elseif($_GET['token'] == "2512") {
        $emplacement = "mediatheque voyelles";
    } elseif($_GET['token'] == "3107") {
        $emplacement = "esnam";
    } else {
        header('location: ../qcm.php?success=4');
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>QCM</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>
    <body><center>

    <div class="d-flex align-items-center justify-content-center" style="background-color:#0062AD; height:150px;">
        <div class="d-flex align-items-end justify-content-center" style="height:250px;"><h2 class="header_text display-2 text-white mx-auto my-auto"><strong><?= $emplacement ?></strong></h2></div>
    </div>

        <form action="resultatsquestions.php?emplacement=<?= $emplacement ?>" method="post" enctype="multipart/form-data">
    <?php $questions = $bdd->prepare("SELECT * FROM questions WHERE emplacement='$emplacement' ");
            $questions->execute();
            while ($data = $questions->fetch()) { $id = $data['question_id']; ?>
                <div>
                    <fieldset>
                        <legend><?= $data['intitule']?></legend>
                    <?php $reponses = $bdd->prepare("SELECT * FROM reponses WHERE id_question = $id");
                    $reponses->execute();
                    while ($r = $reponses->fetch()) { ?>
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" name="reponse[<?=$id?>]" id="customRadio<?=$r['reponse_id']?>" class="custom-control-input" value="<?=$r['reponse_id']?>">
                            <label class="custom-control-label" for="customRadio<?=$r['reponse_id']?>"><?= $r['reponse_name']?>
                            </label>
                        </div>
                    <?php } ?>
                    </fieldset>
                </div>
                <?php if($data['photo'] == 1){$test=1;} else {$test=0;} ?>
                <?php }
                ?>
                <br><br>
                <?php if($test == 1){ ?>
                    <h2>Prenez une photo de vous devant l'emplacement <?= $emplacement; ?></h2>
                    <br>
                    <input type="file" name="image" accept="image/*" capture> 
                    <br><br>
                <?php } ?>
            <div class="custom-control custom-checkbox mt-2"><input class="btn btn-primary" type="submit" value="Valider"></div>
        </form>
            </center>
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
            <script src="assets/js/Video-Parallax-Background-v2.js"></script>
    </body>
    </html>
    <?php } else {
        header('location: ../qcm.php?success=4');
    }
<?php
session_start();
include ('../../include/connexiondbval.php');
if ($_GET['token'] == "jhkhhisdjkfbh") {
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
        <div class="d-flex align-items-end justify-content-center" style="height:250px;"><h2 class="header_text display-2 text-white mx-auto my-auto"><strong>MAIRIE</strong></h2></div>
    </div>

        <form action="resultatsmairie.php" method="post" enctype="multipart/form-data">
    <?php $questions = $bdd->prepare("SELECT * FROM questions WHERE question_id=1 ");
            $questions->execute();
            while ($data = $questions->fetch()) { $test = $data['question_id']; ?>
                <div>
                    <fieldset>
                        <legend><?= $data['intitule']?></legend>
                    <?php $reponses = $bdd->prepare("SELECT * FROM reponses WHERE id_question = $test");
                    $reponses->execute();
                    while ($r = $reponses->fetch()) { ?>
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" name="reponse[<?=$test?>]" id="customRadio<?=$r['reponse_id']?>" class="custom-control-input" value="<?=$r['reponse_id']?>">
                            <label class="custom-control-label" for="customRadio<?=$r['reponse_id']?>"><?= $r['reponse_name']?>
                            </label>
                        </div>
                    <?php } ?>
                    </fieldset>
                </div>
            <?php }
                ?>
                <br><br>
                <h2>Prenez une photo de vous devant la mairie !!</h2>
                <br>
                <input type="file" name="image" accept="image/*" capture> 
                <br><br>
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
<?php
session_start();
include ('../../include/connexiondbval.php');
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

<div class="header_img_quizz">
    <div class="d-flex align-items-end justify-content-center" style="height:250px;"><h2 class="header_text display-2 text-white mx-auto my-auto"><strong>MEDIATHEQUE</strong></h2></div>
  </div>

<body><center>

    <form action="resultatsmairie.php" method="post">
<?php $questions = $bdd->prepare("SELECT * FROM questions WHERE emplacement='mediatheque' ");
        $questions->execute();
        while ($data = $questions->fetch()) { $test = $data['question_id']; ?>
            <div>
                <fieldset>
                    <legend><?=$data['intitule']?></legend>
                <?php $reponses = $bdd->prepare("SELECT * FROM reponses WHERE id_question = $test");
                $reponses->execute();
                while ($r = $reponses->fetch()) { ?>
                    <div class="custom-control custom-checkbox mt-2"><input type="checkbox" name="reponse[<?=$r['reponse_id']?>]" id="customCheck<?=$r['reponse_id']?>" class="custom-control-input"><label class="custom-control-label" for="customCheck<?=$r['reponse_id']?>"><?= $r['reponse_name']?></label></div>
                </fieldset>
            </div>
        <?php }}

        
            ?>
        <div class="custom-control custom-checkbox mt-2"><input class="btn btn-primary" type="submit" value="Valider"></div>
    </form>
        </center>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
        <script src="assets/js/Video-Parallax-Background-v2.js"></script>
</body>

</html>
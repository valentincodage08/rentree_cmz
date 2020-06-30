<?php
session_start();
include ('../../include/connexiondbval.php');

$team = $_SESSION['team'];
$note = 0;
$emplacement="mairie";

if(isset($_POST['reponse'])) {

    foreach ($_POST['reponse'] as $idquestion => $value) {
        $statut = $bdd->prepare("SELECT statut, points, id_question FROM reponses WHERE reponse_id = $value");
        $statut->execute();

        while ($reponse = $statut->fetch()) {
            $thisquestion = $reponse['id_question'];
            $siunereponseestfausse = $bdd->prepare("SELECT points FROM reponses WHERE id_question = $thisquestion");
            $siunereponseestfausse->execute();

            if ($reponse['statut'] == 1 ){ 

                $note = $note + $reponse['points'];

            }
        }
    }

    $dejafait = $bdd->prepare("SELECT * FROM pointsqcm WHERE team_name = '$team' AND emplacement = 'mairie'");
    $dejafait->execute();

    $count = $dejafait->rowCount();
    if($count==0) {

        $insertpoints = $bdd->prepare("INSERT INTO pointsqcm (team_name, emplacement, points)
                                        VALUES (:team_name, :emplacement, :points)");
        $insertpoints->execute(array(
            'team_name' => $team,
            'emplacement' => $emplacement,
            'points' => $note
        ));
        $insertpoints->closeCursor();
        header('location: ../qcm.php?success=3');
    } else {
        header('location: ../qcm.php?success=2');
    }

}

else {
    echo "Vous n'avez entré aucune réponse";
}

?>
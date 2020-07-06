<?php
session_start();
include ('../../include/connexiondbval.php');

$team = $_SESSION['team'];
$note = 0;
$emplacement="mediatheque";
date_default_timezone_set('Europe/Paris');
$time = date("H:i:s");

$note2 = 0;

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

    $dejafait = $bdd->prepare("SELECT * FROM pointsqcm WHERE team_name = '$team' AND emplacement = 'mediatheque'");
    $dejafait->execute();

    $count = $dejafait->rowCount();
    if($count==0) {

        $insertpoints = $bdd->prepare("INSERT INTO pointsqcm (team_name, emplacement, points, heure, reponse)
                                        VALUES (:team_name, :emplacement, :points, :heure, :reponse)");
        $insertpoints->execute(array(
            'team_name' => $team,
            'emplacement' => $emplacement,
            'points' => $note,
            'heure' => $time,
            'reponse' => $_POST['reponse'][key($_POST['reponse'])]
        ));
        $insertpoints->closeCursor();

        $finduqcm = $bdd->prepare("SELECT * FROM pointsqcm WHERE team_name = '$team'");
        $finduqcm->execute();

        $count2 = $finduqcm->rowCount();

        if ($count2==2) {
            $heuredefin = $bdd->prepare("UPDATE rdeexpressregister
                                            SET heure_fin = :heure_fin
                                            WHERE team_name = :team_name");
            $heuredefin->execute(array(
                'heure_fin' => $time,
                'team_name' => $team
            ));
            $heuredefin->closeCursor();

            $totalpoints = $bdd->prepare("SELECT points FROM pointsqcm WHERE team_name = '$team'");
            $totalpoints->execute();

            while ($data = $totalpoints->fetch()) {
                $note2 = $note2 + $data['points'];
            }
            $totalpoints->closeCursor();

            $insertpoints = $bdd->prepare("UPDATE rdeexpressregister
                                            SET total = :total
                                            WHERE team_name = :team_name");
            $insertpoints->execute(array(
            'total' => $note2,
            'team_name' => $team
            ));
            $insertpoints->closeCursor();
        }
        
        header('location: ../qcm.php?success=3');
    } else {
        header('location: ../qcm.php?success=2');
    }

}

else {
    echo "Vous n'avez entré aucune réponse";
}

?>
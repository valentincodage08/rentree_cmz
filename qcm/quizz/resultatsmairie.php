<?php
session_start();
include ('../../include/connexiondbval.php');

$note = 0;

if(isset($_POST['reponse'])) {

    foreach ($_POST['reponse'] as $idreponse => $value) {
        $statut = $bdd->prepare("SELECT statut, points, id_question FROM reponses WHERE reponse_id = $idreponse");
        $statut->execute();

        while ($reponse = $statut->fetch()) {
            $thisquestion = $reponse['id_question'];
            $siunereponseestfausse = $bdd->prepare("SELECT points FROM reponses WHERE id_question = $thisquestion");
            $siunereponseestfausse->execute();

            while ($pointsforthisquestion = $siunereponseestfausse->fetch()) {
                var_dump($pointsforthisquestion);
            }

            // Je fais une requete en liant l'id de la réponse et l'id de la question, si jamais une réponse a un statut
            // à 0, vu que je la récup dans mes données c'est qu'elle est cochée, alors on ne va pas incrémenter note

            if ($reponse['statut'] == 1 ){ $note = $note + $reponse['points'];}

            //Le if deviendra mon else

        }
    }
}

else {
    echo "Vous n'avez entré aucune réponse";
}

echo $note;

//$_SESSION['note'] = $note;

?>
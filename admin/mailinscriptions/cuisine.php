<?php
include('../../include/connexiondbval.php');

$objet = html_entity_decode(!empty($_POST['objet']) ? $_POST['objet'] : NULL);
$message = utf8_decode(!empty($_POST['message']) ? $_POST['message'] : NULL) . "<br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.";

    $req3 = $bdd->prepare("SELECT * FROM rdecuisineregister, rdecuisinerelation, rdeparticipants WHERE rdecuisinerelation.participant_id = rdeparticipants.id_participant AND rdecuisinerelation.name_team = rdecuisineregister.team_name");
    $req3->execute();

    while ($donnees = $req3->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req3->closeCursor();

    header('location: ../inscriptions.php?success=3');

?>
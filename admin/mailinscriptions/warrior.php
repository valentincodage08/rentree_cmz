<?php
include('../../include/connexiondbval.php');

$objet = html_entity_decode(!empty($_POST['objet']) ? $_POST['objet'] : NULL);
$message = utf8_decode(!empty($_POST['message']) ? $_POST['message'] : NULL) . "<br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.";

    $req2 = $bdd->prepare("SELECT * FROM rdewarriorregister, rdewarriorrelation, rdeparticipants WHERE rdewarriorrelation.participant_id = rdeparticipants.id_participant AND rdewarriorrelation.name_team = rdewarriorregister.team_name");
    $req2->execute();

    while ($donnees = $req2->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req2->closeCursor();

    header('location: ../inscriptions.php?success=2');

?>
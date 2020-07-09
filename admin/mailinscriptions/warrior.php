<?php
include('../../include/connexiondbval.php');

$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$message = !empty($_POST['message']) ? $_POST['message'] : NULL;

$objet = utf8_decode($objet);
$message = utf8_decode($message);

    $req2 = $bdd->prepare("SELECT * FROM rdewarriorregister, rdewarriorrelation, rdeparticipants WHERE rdewarriorrelation.participant_id = rdeparticipants.id_participant AND rdewarriorrelation.name_team = rdewarriorregister.team_name");
    $req2->execute();

    while ($donnees = $req2->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req2->closeCursor();

    header('location: ../inscriptions.php?success=2');

?>
<?php
include('../../include/connexiondbval.php');

$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$message = !empty($_POST['message']) ? $_POST['message'] : NULL;

$objet = utf8_decode($objet);
$message = utf8_decode($message);

foreach($_POST['groupe'] as $team => $value) {


    $equipes = $bdd->prepare("SELECT * FROM rdewarriorrelation, rdeparticipants WHERE rdewarriorrelation.name_team = '$team' AND rdewarriorrelation.participant_id = rdeparticipants.id_participant");
    $equipes->execute();

    while ($data = $equipes->fetch()) {
        mail($data['mail'], $objet, $message);
    }
}

$equipes->closeCursor();

header('location: ../inscriptions.php?success=8');

?>
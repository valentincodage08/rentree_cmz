<?php
include('../../include/connexiondbval.php');

$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$message = !empty($_POST['message']) ? $_POST['message'] : NULL;

foreach($_POST['groupe'] as $team => $value) {


    $equipes = $bdd->prepare("SELECT * FROM rdebasketrelation, rdeparticipants WHERE rdebasketrelation.name_team = '$team' AND rdebasketrelation.participant_id = rdeparticipants.id_participant");
    $equipes->execute();

    while ($data = $equipes->fetch()) {
        mail($data['mail'], $objet, $message);
    }
}

$equipes->closeCursor();

header('location: ../inscriptions.php?success=10');

?>
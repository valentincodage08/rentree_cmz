<?php
include('../../include/connexiondbval.php');

$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$message = !empty($_POST['message']) ? $_POST['message'] : NULL;

    $req3 = $bdd->prepare("SELECT * FROM rdecuisineregister, rdecuisinerelation, rdeparticipants WHERE rdecuisinerelation.participant_id = rdeparticipants.id_participant AND rdecuisinerelation.name_team = rdecuisineregister.team_name");
    $req3->execute();

    while ($donnees = $req3->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req3->closeCursor();

    header('location: ../inscriptions.php?success=3');

?>
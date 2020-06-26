<?php
include('../../include/connexiondbval.php');

$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$message = !empty($_POST['message']) ? $_POST['message'] : NULL;

    $req3 = $bdd->prepare("SELECT * FROM RDECuisineregister, RDECuisinerelation, RDEParticipants WHERE RDECuisinerelation.participant_id = RDEParticipants.id_participant AND RDECuisinerelation.name_team = RDECuisineregister.team_name");
    $req3->execute();

    while ($donnees = $req3->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req3->closeCursor();

    header('location: ../inscriptions.php?success=3');

?>
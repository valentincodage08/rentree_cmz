<?php
include('../../include/connexiondbval.php');

$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$message = !empty($_POST['message']) ? $_POST['message'] : NULL;

    $req7 = $bdd->prepare("SELECT * FROM RDEEscaperegister, RDEEscaperelation, RDEParticipants WHERE RDEEscaperelation.participant_id = RDEParticipants.id_participant AND RDEEscaperelation.name_team = RDEEscaperegister.team_name");
    $req7->execute();

    while ($donnees = $req7->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req->closeCursor();

    header('location: ../inscriptions.php?success=6');

?>
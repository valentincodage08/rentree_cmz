<?php
include('../../include/connexiondbval.php');

$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$message = !empty($_POST['message']) ? $_POST['message'] : NULL;

    $req = $bdd->prepare("SELECT * FROM RDEExpressregister, RDEExpressrelation, RDEParticipants WHERE RDEExpressrelation.participant_id = RDEParticipants.id_participant AND RDEExpressrelation.name_team = RDEExpressregister.team_name");
     $req->execute();

    while ($donnees = $req->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req->closeCursor();

    header('location: ../inscriptions.php?success=1');

?>
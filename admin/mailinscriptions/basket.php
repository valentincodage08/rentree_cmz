<?php
include('../../include/connexiondbval.php');

$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$message = !empty($_POST['message']) ? $_POST['message'] : NULL;

    $req5 = $bdd->prepare("SELECT * FROM RDEBasketregister, RDEBasketrelation, RDEParticipants WHERE RDEBasketrelation.participant_id = RDEParticipants.id_participant AND RDEBasketrelation.name_team = RDEBasketregister.team_name");
    $req5->execute();

    while ($donnees = $req5->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req->closeCursor();

    header('location: ../inscriptions.php?success=5');

?>
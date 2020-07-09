<?php
include('../../include/connexiondbval.php');

$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$message = !empty($_POST['message']) ? $_POST['message'] : NULL;

$objet = utf8_decode($objet);
$message = utf8_decode($message);

    $req = $bdd->prepare("SELECT * FROM rdeexpressregister, rdeexpressrelation, rdeparticipants WHERE rdeexpressrelation.participant_id = rdeparticipants.id_participant AND rdeexpressrelation.name_team = rdeexpressregister.team_name");
     $req->execute();

    while ($donnees = $req->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req->closeCursor();

    header('location: ../inscriptions.php?success=1');

?>
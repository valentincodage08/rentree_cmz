<?php
include('../../include/connexiondbval.php');

$objet = html_entity_decode(!empty($_POST['objet']) ? $_POST['objet'] : NULL);
$message = utf8_decode(!empty($_POST['message']) ? $_POST['message'] : NULL) . "<br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.";
    
    $req = $bdd->prepare("SELECT * FROM rdeexpressregister, rdeexpressrelation, rdeparticipants WHERE rdeexpressrelation.participant_id = rdeparticipants.id_participant AND rdeexpressrelation.name_team = rdeexpressregister.team_name");
    $req->execute();

    while ($donnees = $req->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req->closeCursor();

    header('location: ../inscriptions.php?success=1');

?>
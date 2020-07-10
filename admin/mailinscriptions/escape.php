<?php
include('../../include/connexiondbval.php');

$objet = html_entity_decode(!empty($_POST['objet']) ? $_POST['objet'] : NULL);
$message = utf8_decode(!empty($_POST['message']) ? $_POST['message'] : NULL) . "<br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.";

    $req7 = $bdd->prepare("SELECT * FROM rdeescaperegister, rdeparticipants WHERE rdeescaperegister.participant_id = rdeparticipants.id_participant ORDER BY rdeescaperegister.participant_id ASC");
    $req7->execute();

    while ($donnees = $req7->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req7->closeCursor();

    header('location: ../inscriptions.php?success=6');

?>
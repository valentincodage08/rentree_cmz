<?php
include('../../include/connexiondbval.php');

$objet = utf8_decode(!empty($_POST['objet']) ? $_POST['objet'] : NULL);
$message = utf8_decode(!empty($_POST['message']) ? $_POST['message'] : NULL);

$objet = utf8_decode($objet);
$message = utf8_decode($message);

    $req7 = $bdd->prepare("SELECT * FROM rdeescaperegister, rdeparticipants WHERE rdeescaperegister.participant_id = rdeparticipants.id_participant ORDER BY rdeescaperegister.participant_id ASC");
    $req7->execute();

    while ($donnees = $req7->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req7->closeCursor();

    header('location: ../inscriptions.php?success=6');

?>
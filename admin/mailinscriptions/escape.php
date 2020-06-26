<?php
include('../../include/connexiondbval.php');

$objet = utf8_decode(!empty($_POST['objet']) ? $_POST['objet'] : NULL);
$message = utf8_decode(!empty($_POST['message']) ? $_POST['message'] : NULL);

    $req7 = $bdd->prepare("SELECT * FROM RDEEscaperegister, RDEParticipants WHERE RDEEscaperegister.participant_id = RDEParticipants.id_participant ORDER BY RDEEscaperegister.participant_id ASC");
    $req7->execute();

    while ($donnees = $req7->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req7->closeCursor();

    header('location: ../inscriptions.php?success=6');

?>
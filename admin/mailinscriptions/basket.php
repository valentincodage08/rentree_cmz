<?php
include('../../include/connexiondbval.php');

$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$message = !empty($_POST['message']) ? $_POST['message'] : NULL;

    $req5 = $bdd->prepare("SELECT * FROM rdebasketregister, rdebasketrelation, rdeparticipants WHERE rdebasketrelation.participant_id = rdeparticipants.id_participant AND rdebasketrelation.name_team = rdebasketregister.team_name");
    $req5->execute();

    while ($donnees = $req5->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req5->closeCursor();

    header('location: ../inscriptions.php?success=5');

?>
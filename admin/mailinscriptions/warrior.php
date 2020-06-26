<?php
include('../../include/connexiondbval.php');

$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$message = !empty($_POST['message']) ? $_POST['message'] : NULL;

    $req2 = $bdd->prepare("SELECT * FROM RDEWarriorregister, RDEWarriorrelation, RDEParticipants WHERE RDEWarriorrelation.participant_id = RDEParticipants.id_participant AND RDEWarriorrelation.name_team = RDEWarriorregister.team_name");
    $req2->execute();

    while ($donnees = $req2->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req2->closeCursor();

    header('location: ../inscriptions.php?success=2');

?>
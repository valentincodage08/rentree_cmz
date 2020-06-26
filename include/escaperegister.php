<?php

include('connexiondbval.php');

$establishment = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;

$name1 = !empty($_POST['name1']) ? $_POST['name1'] : NULL;
$firstname1 = !empty($_POST['firstname1']) ? $_POST['firstname1'] : NULL;
$tel1 = !empty($_POST['tel1']) ? $_POST['tel1'] : NULL;
$mail1 = !empty($_POST['mail1']) ? $_POST['mail1'] : NULL;
$verifmail1 = !empty($_POST['verifmail1']) ? $_POST['verifmail1'] : NULL;

$objetinscrip = utf8_decode("Confirmation d'inscription à l'Escape Game");
$messageinscrip = utf8_decode("Bonjour, votre inscription est bien prise en compte pour l'Escape Game.");


    if($mail1 == $verifmail1) {

            $part1 = $bdd->prepare("INSERT INTO RDEParticipants (name, first_name, phone, mail)
                                    VALUES ( :name, :first_name, :phone, :mail)");

            $part1->execute(array(
                ':name' => $name1,
                ':first_name' => $firstname1,
                ':phone' => $tel1,
                ':mail' => $mail1
            ));
            $part1->closeCursor();
            $idpart1 = $bdd->lastInsertId();


            $escaperegistration = $bdd->prepare("INSERT INTO RDEEscaperegister (establishment, participant_id)
                                                VALUES ( :establishment, :participant_id)");

            $escaperegistration->execute(array(
            ':establishment' => $establishment,
            ':participant_id' => $idpart1
            ));
            $escaperegistration->closeCursor();

            mail($mail1, $objetinscrip, $messageinscrip);

            header('location: ../event_register_escape.php?success=1');
    } else {
        header('location: ../event_register_escape.php?success=2');;
    }
?>
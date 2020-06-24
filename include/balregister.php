<?php
include('connexiondbval.php');

$establishment = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
$name = !empty($_POST['name']) ? $_POST['name'] : NULL;
$firstname = !empty($_POST['firstname']) ? $_POST['firstname'] : NULL;
$tel = !empty($_POST['tel']) ? $_POST['tel'] : NULL;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
$verifmail = !empty($_POST['verifmail']) ? $_POST['verifmail'] : NULL;

$objetinscrip = utf8_decode("Confirmation d'inscription au Bal de rentrée");
$messageinscrip = utf8_decode("Bonjour, votre inscription est bien prise en compte pour le Bal de rentrée.");



if($mail == $verifmail) {
    $addparticipant = $bdd->prepare("INSERT INTO RDEParticipants (name, first_name, phone, mail)
                                  VALUES ( :name, :first_name, :phone, :mail)");

    $addparticipant->execute(array(
        ':name' => $name,
        ':first_name' => $firstname,
        ':phone' => $tel,
        ':mail' => $mail
    ));
    $addparticipant->closeCursor();

    $participant_id = $bdd->lastInsertId();

    $balregistration = $bdd->prepare("INSERT INTO RDEBalregister (establishment, participant_id)
                                      VALUES ( :establishment, :participant_id)");

    $balregistration->execute(array(
    ':establishment' => $establishment,
    ':participant_id' => $participant_id
    ));
    $balregistration->closeCursor();

    mail($mail, $objetinscrip, $messageinscrip);

    header('Location: ../event_register_bal.php?success=1');
}

else {
    header('Location: ../event_register_bal.php?success=2');
}

?>
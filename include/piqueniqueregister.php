<?php
include('connexiondbval.php');

$establishment = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
$name = !empty($_POST['name']) ? $_POST['name'] : NULL;
$firstname = !empty($_POST['firstname']) ? $_POST['firstname'] : NULL;
$tel = !empty($_POST['tel']) ? $_POST['tel'] : NULL;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
$verifmail = !empty($_POST['verifmail']) ? $_POST['verifmail'] : NULL;

$objetinscrip = utf8_decode("Confirmation d'inscription au Pique-Nique");
$messageinscrip = utf8_decode("Bonjour, votre inscription est bien prise en compte pour le Pique-Nique.");



if($mail == $verifmail) {

    $balregistration = $bdd->prepare("INSERT INTO RDEPiqueniquetregister (name, first_name, phone, mail, establishment )
                                      VALUES (:name, :first_name, :phone, :mail, :establishment)");

    $balregistration->execute(array(
    ':name' => $name,
    ':first_name' => $firstname,
    ':phone' => $tel,
    ':mail' => $mail,
    ':establishment' => $establishment
    ));
    $balregistration->closeCursor();

    mail($mail, $objetinscrip, $messageinscrip);

    header('location: ../event_register_piquenique.php?success=1');
}

else {
    header('location: ../event_register_piquenique.php?success=2');
}

?>
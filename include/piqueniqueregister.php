<?php
include('connexiondbval.php');

$establishment = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
$name = !empty($_POST['name']) ? $_POST['name'] : NULL;
$firstname = !empty($_POST['firstname']) ? $_POST['firstname'] : NULL;
$tel = !empty($_POST['tel']) ? $_POST['tel'] : NULL;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
$verifmail = !empty($_POST['verifmail']) ? $_POST['verifmail'] : NULL;


if($mail == $verifmail) {

    $balregistration = $bdd->prepare("INSERT INTO rdepiqueniquetregister (name, first_name, phone, mail, establishment )
                                      VALUES (:name, :first_name, :phone, :mail, :establishment)");

    $balregistration->execute(array(
    ':name' => $name,
    ':first_name' => $firstname,
    ':phone' => $tel,
    ':mail' => $mail,
    ':establishment' => $establishment
    ));
    $balregistration->closeCursor();
    $idparticipant = $bdd->lastInsertId();

    if ($idparticipant <= 200) {
        $objetinscrip = utf8_decode("Confirmation d'inscription au Pique-Nique");
        $messageinscrip = utf8_decode("Bonjour, votre inscription est bien prise en compte pour le Pique-Nique, le prix de votre repas sera de 3 euros. A très bientôt ! <br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.");

        mail($mail, $objetinscrip, $messageinscrip);
    } else {
        $objetinscrip2 = utf8_decode("Confirmation d'inscription au Pique-Nique");
        $messageinscrip2 = utf8_decode("Bonjour, votre inscription est bien prise en compte pour le Pique-Nique, le prix de votre repas sera de 5 euros. A très bientôt ! <br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.");

        mail($mail, $objetinscrip2, $messageinscrip2);
    }

    header('location: ../event_register_piquenique.php?success=1');
}

else {
    header('location: ../event_register_piquenique.php?success=2');
}

?>
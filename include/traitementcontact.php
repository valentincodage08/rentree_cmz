<?php 

$nom = !empty($_POST['name']) ? $_POST['name'] : NULL;
$prenom = !empty($_POST['firstname']) ? $_POST['firstname'] : NULL;
$etablissement = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
$tel = !empty($_POST['tel']) ? $_POST['tel'] : NULL;
$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$msg = !empty($_POST['message']) ? $_POST['message'] : NULL;
$destinataire = "valentin_mg08@hotmail.fr";
$message = "Nom : $nom \rPrénom : $prenom \rEtablissement : $etablissement \rAdresse mail : $mail \rTéléphone : $tel \r\rMessage : \r$msg <br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.";

$objet = utf8_decode($objet);
$message = utf8_decode($message);

if(!empty($nom) AND !empty($prenom) AND !empty($etablissement) AND !empty($mail) AND !empty($tel) AND !empty($objet) AND !empty($msg) AND !empty($destinataire) AND !empty($message) ) {

    mail($destinataire, $objet, $message);
    header('location: ../contact.php?success=1');
} else {
    header('location: ../contact.php?success=2');
}
?>
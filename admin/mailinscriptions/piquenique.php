<?php
include('../../include/connexiondbval.php');

$objet = html_entity_decode(!empty($_POST['objet']) ? $_POST['objet'] : NULL);
$message = utf8_decode(!empty($_POST['message']) ? $_POST['message'] : NULL) . "<br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.";

    $req4 = $bdd->prepare("SELECT * FROM rdepiqueniquetregister");
    $req4->execute(); 

    while ($donnees = $req4->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req4->closeCursor();

    header('location: ../inscriptions.php?success=4');

?>
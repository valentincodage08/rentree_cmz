<?php
include('../../include/connexiondbval.php');

$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$message = !empty($_POST['message']) ? $_POST['message'] : NULL;

    $req4 = $bdd->prepare("SELECT * FROM RDEPiqueniquetregister");
    $req4->execute(); 

    while ($donnees = $req4->fetch())
    { $mail = $donnees['mail'];
        mail($mail, $objet, $message);
    };

    $req->closeCursor();

    header('location: ../inscriptions.php?success=4');

?>
<?php
include ('../../../include/connexiondbval.php');

$idpartner = $_GET['id'];

$req = $bdd->prepare(" DELETE FROM rdepartners WHERE id_partner = $idpartner");
$req->execute();
$req->closecursor();

header("Location: ../../admin.php?success=partnerdeleted");

?>
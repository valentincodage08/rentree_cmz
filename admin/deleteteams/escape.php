<?php
include('../../include/connexiondbval.php');

foreach($_POST['groupe'] as $team => $value) {


    $equipes = $bdd->prepare("DELETE FROM `rdeescaperegister` WHERE team_name = '$team'");
    $equipes->execute();
}

$equipes->closeCursor();

header('location: ../inscriptions.php?success=delete');

?>
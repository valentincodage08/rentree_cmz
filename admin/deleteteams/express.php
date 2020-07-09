<?php
include('../../include/connexiondbval.php');

foreach($_POST['groupe'] as $team => $value) {


    $equipes = $bdd->prepare("DELETE FROM `rdeexpressrelation` WHERE name_team = '$team'");
    $equipes->execute();

    $equipes2 = $bdd->prepare("DELETE FROM `rdeexpressregister` WHERE team_name = '$team'");
    $equipes2->execute();
}

$equipes->closeCursor();
$equipes2->closeCursor();

header('location: ../inscriptions.php?success=delete');

?>
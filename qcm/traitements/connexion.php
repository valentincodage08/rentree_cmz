<?php
session_start();
include('../../include/connexiondbval.php');

$teamname = $_POST['teamname'];
$password = $_POST['password'];

$connexion = $bdd->prepare("SELECT team_name, password_manif FROM rdeexpressregister WHERE team_name = :teamname AND password_manif = :password");
$connexion->execute(array(
    'teamname' => $teamname,
    'password' => $password
));

$resultat = $connexion->fetch();
$nbresultats = $connexion->rowCount();

if ($nbresultats == 1) {

    $_SESSION['team'] = $resultat['team_name'];

    header('location: ../qcm.php');
} else {
    header('location: ../index.php?success=1');
}



?>
<?php
session_start();
$code = !empty($_POST['code']) ? $_POST['code'] : NULL;

if($code == 'jhkhhisdjkfbh') {
    header('location: ../quizz/mairie.php?token=jhkhhisdjkfbh');
} elseif($code == 'dtcfvyjgubkhnGUJlj58') {
    header('location: ../quizz/mediatheque.php?token=dtcfvyjgubkhnGUJlj58');
} else {
    header('location: ../qcm.php?success=1');
}

?>
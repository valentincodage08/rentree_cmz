<?php

$code = !empty($_POST['code']) ? $_POST['code'] : NULL;

echo $code;

if($code == 'mairie') {
    header('location: ../quizz/mairie.php');
} elseif($code == 'mediatheque') {
    header('location: ../quizz/mediatheque.php');
} else {
    header('location: ../qcm.php?success=1');
}

?>
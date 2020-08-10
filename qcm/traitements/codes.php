<?php
session_start();
$code = !empty($_POST['code']) ? $_POST['code'] : NULL;

if($code == '4225') {
    header('location: ../quizz/questions.php?token=4225');
} elseif($code == '1930') {
    header('location: ../quizz/questions.php?token=1930');
} elseif($code == '2908') {
    header('location: ../quizz/questions.php?token=2908');
} elseif($code == '1100') {
    header('location: ../quizz/questions.php?token=1100');
} elseif($code == '9909') {
    header('location: ../quizz/questions.php?token=9909');
} elseif($code == '1202') {
    header('location: ../quizz/questions.php?token=1202');
} elseif($code == '1403') {
    header('location: ../quizz/questions.php?token=1403');
} elseif($code == '5645') {
    header('location: ../quizz/questions.php?token=5645');
} elseif($code == '0904') {
    header('location: ../quizz/questions.php?token=0904');
} elseif($code == '7812') {
    header('location: ../quizz/questions.php?token=7812');
} elseif($code == '5151') {
    header('location: ../quizz/questions.php?token=5151');
} elseif($code == '9632') {
    header('location: ../quizz/questions.php?token=9632');
} elseif($code == '1515') {
    header('location: ../quizz/questions.php?token=1515');
} elseif($code == '3637') {
    header('location: ../quizz/questions.php?token=3637');
} elseif($code == '2512') {
    header('location: ../quizz/questions.php?token=2512');
} elseif($code == '3107') {
    header('location: ../quizz/questions.php?token=3107');
} else {
    header('location: ../qcm.php?success=1');
}

?>
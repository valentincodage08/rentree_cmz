<?php
include ('../../../include/connexiondbval.php');

$first_name = !empty($_POST['first_name']) ? $_POST['first_name'] : NULL;
$age = !empty($_POST['age']) ? $_POST['age'] : NULL;
$establishment = !empty($_POST['establishment']) ? $_POST['establishment'] : NULL;
$text = !empty($_POST['text']) ? $_POST['text'] : NULL;


$newtestimonial = $bdd->prepare("INSERT INTO rdetestimonials (first_name, age, establishment, text)
                              VALUES ( :first_name, :age, :establishment, :text)");

$newtestimonial->execute(array(
  ':first_name' => $first_name,
  ':age' => $age,
  ':establishment' => $establishment,
  ':text' => $text
));
$newtestimonial->closeCursor();

header("Location: ../../admin.php?success=testimonialadd");

?>
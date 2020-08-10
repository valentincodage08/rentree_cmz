<?php

// include('connexiondbval.php');

// $establishment = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;

// $teamname = !empty($_POST['teamname']) ? $_POST['teamname'] : NULL;

// $name1 = !empty($_POST['name1']) ? $_POST['name1'] : NULL;
// $firstname1 = !empty($_POST['firstname1']) ? $_POST['firstname1'] : NULL;
// $tel1 = !empty($_POST['tel1']) ? $_POST['tel1'] : NULL;
// $mail1 = !empty($_POST['mail1']) ? $_POST['mail1'] : NULL;
// $verifmail1 = !empty($_POST['verifmail1']) ? $_POST['verifmail1'] : NULL;

// $name2 = !empty($_POST['name2']) ? $_POST['name2'] : NULL;
// $firstname2 = !empty($_POST['firstname2']) ? $_POST['firstname2'] : NULL;
// $tel2 = !empty($_POST['tel2']) ? $_POST['tel2'] : NULL;
// $mail2 = !empty($_POST['mail2']) ? $_POST['mail2'] : NULL;
// $verifmail2 = !empty($_POST['verifmail2']) ? $_POST['verifmail2'] : NULL;

// $objetinscrip = utf8_decode("Confirmation d'inscription au Concours de Cuisine");
// $messageinscrip = utf8_decode("Bonjour l'équipe $teamname, votre inscription est bien prise en compte pour le Concours de Cuisine. A très bientôt ! <br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.");

//         $req = $bdd->prepare("SELECT * FROM rdecuisineregister");
//         $req->execute();
//         $placescount = $req->rowCount();
//         $placesrestantes = 10 - $placescount;
//         $req->closeCursor();

// if($placesrestantes>0) {

//     if($mail1 == $verifmail1 && $mail2 == $verifmail2) {

//         $teamnameexist = $bdd->prepare("SELECT team_name FROM rdecuisineregister WHERE team_name = '$teamname'");
//         $teamnameexist->execute();

//         $count = $teamnameexist->rowCount();
//         if($count>0) {
//             header('location: ../event_register_concourscuisine.php?success=3');
//             } else {
        
//             $part1 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
//                                     VALUES ( :name, :first_name, :phone, :mail)");

//             $part1->execute(array(
//                 ':name' => $name1,
//                 ':first_name' => $firstname1,
//                 ':phone' => $tel1,
//                 ':mail' => $mail1
//             ));
//             $part1->closeCursor();
//             $idpart1 = $bdd->lastInsertId();

//             $part2 = $bdd->prepare("INSERT INTO rdeparticipants (name, first_name, phone, mail)
//                                     VALUES ( :name, :first_name, :phone, :mail)");

//             $part2->execute(array(
//                 ':name' => $name2,
//                 ':first_name' => $firstname2,
//                 ':phone' => $tel2,
//                 ':mail' => $mail2
//             ));
//             $part2->closeCursor();
//             $idpart2 = $bdd->lastInsertId();

//             $basketregistration = $bdd->prepare("INSERT INTO rdecuisineregister (team_name, establishment)
//                                                 VALUES ( :team_name, :establishment)");

//             $basketregistration->execute(array(
//             ':team_name' => $teamname,
//             ':establishment' => $establishment
//             ));
//             $basketregistration->closeCursor();

//             $basketrelation1 = $bdd->prepare("INSERT INTO rdecuisinerelation (participant_id, name_team)
//                                                 VALUES ( :participant_id, :name_team)");

//             $basketrelation1->execute(array(
//             ':participant_id' => $idpart1,
//             ':name_team' => $teamname
//             ));
//             $basketrelation1->closeCursor();

//             $basketrelation2 = $bdd->prepare("INSERT INTO rdecuisinerelation (participant_id, name_team)
//                                                 VALUES ( :participant_id, :name_team)");

//             $basketrelation2->execute(array(
//             ':participant_id' => $idpart2,
//             ':name_team' => $teamname
//             ));
//             $basketrelation2->closeCursor();

//             mail($mail1, $objetinscrip, $messageinscrip);
//             mail($mail2, $objetinscrip, $messageinscrip);

//             header('location: ../event_register_concourscuisine.php?success=1');
//         }
//     } else {
//         header('location: ../event_register_concourscuisine.php?success=2');
//     }
// }
// else {
//     header('location: ../event_register_concourscuisine.php?success=4');
// }
?>
<?php

// include('connexiondbval.php');

// $establishment = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
// $teamname = !empty($_POST['teamname']) ? $_POST['teamname'] : NULL;
// $nbpart = !empty($_POST['nbpart']) ? $_POST['nbpart'] : NULL;

// $name1 = !empty($_POST['name1']) ? $_POST['name1'] : NULL;
// $firstname1 = !empty($_POST['firstname1']) ? $_POST['firstname1'] : NULL;
// $tel1 = !empty($_POST['tel1']) ? $_POST['tel1'] : NULL;
// $mail1 = !empty($_POST['mail1']) ? $_POST['mail1'] : NULL;
// $verifmail1 = !empty($_POST['verifmail1']) ? $_POST['verifmail1'] : NULL;

// $objetinscrip = utf8_decode("Confirmation d'inscription à l'Escape Game");
// $messageinscrip = utf8_decode("Bonjour l'équipe $teamname, votre inscription est bien prise en compte pour l'Escape Game. A très bientôt ! <br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.");


//     if($mail1 == $verifmail1) {

//         $teamnameexist = $bdd->prepare("SELECT team_name FROM rdeescaperegister WHERE team_name = '$teamname'");
//         $teamnameexist->execute();

//         $count = $teamnameexist->rowCount();
//         if($count==0) {

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


//             $escaperegistration = $bdd->prepare("INSERT INTO rdeescaperegister (establishment, team_name, nbpart, id_participant)
//                                                 VALUES ( :establishment, :team_name, :nbpart, :id_participant)");

//             $escaperegistration->execute(array(
//             ':establishment' => $establishment,
//             ':team_name' => $teamname,
//             ':nbpart' => $nbpart,
//             ':id_participant' => $idpart1
//             ));
//             $escaperegistration->closeCursor();

//             mail($mail1, $objetinscrip, $messageinscrip);

//             header('location: ../event_register_escape.php?success=1');
//         } else {
//             header('location: ../event_register_escape.php?success=3');
//         }
//     } else {
//         header('location: ../event_register_escape.php?success=2');;
//     }
?>
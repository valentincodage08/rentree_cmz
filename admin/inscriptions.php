<?php
include('../include/connexiondbval.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie Administrateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
</head>

<body class="bg-light">

<h1 class="text-center font-weight-light font-italic text-black-50 mt-4 mb-5">Ici vous pourrez voir les inscriptions effectuées sur les différents évènements</h1>
    <center><a href="../index.php" class="text-black-50 mb-5">Revenir à l'accueil</a></center>
    <center><a href="admin.php" class="text-black-50 mt-5 mb-5">Retour dans l'interface Administrateur</a></center>

    <?php if(isset($_GET['success'])){
                if($_GET['success'] == 1) {?>
                    <div class="alert alert-secondary" role="alert">
                    <center>Les mails ont bien été envoyés pour le Carolo Express.</center>
                    </div>
        <?php } elseif($_GET['success'] == 2) { ?>
                    <div class="alert alert-secondary" role="alert">
                    <center>Les mails ont bien été envoyés pour le Carolo Warrior.</center>
                    </div>
        <?php } elseif($_GET['success'] == 3) { ?>
                    <div class="alert alert-secondary" role="alert">
                    <center>Les mails ont bien été envoyés pour le Concours de cuisine.</center>
                    </div>
        <?php } elseif($_GET['success'] == 4) { ?>
                    <div class="alert alert-secondary" role="alert">
                    <center>Les mails ont bien été envoyés pour le Pique-Nique.</center>
                    </div>
        <?php } elseif($_GET['success'] == 5) { ?>
                    <div class="alert alert-secondary" role="alert">
                    <center>Les mails ont bien été envoyés pour le Tournoi de Basket.</center>
                    </div>
        <?php } elseif($_GET['success'] == 6) { ?>
                    <div class="alert alert-secondary" role="alert">
                    <center>Les mails ont bien été envoyés pour l'Escape Game'.</center>
                    </div>
        <?php } elseif($_GET['success'] == 7) { ?>
                    <div class="alert alert-secondary" role="alert">
                    <center>Les mails ont bien été envoyés les équipes sélectionnées du Carolo Express.</center>
                    </div>
        <?php } elseif($_GET['success'] == 8) { ?>
                    <div class="alert alert-secondary" role="alert">
                    <center>Les mails ont bien été envoyés les équipes sélectionnées du Carolo Warrior.</center>
                    </div>
        <?php } elseif($_GET['success'] == 9) { ?>
                    <div class="alert alert-secondary" role="alert">
                    <center>Les mails ont bien été envoyés les équipes sélectionnées du Concours de cuisine.</center>
                    </div>
        <?php } elseif($_GET['success'] == 10) { ?>
                    <div class="alert alert-secondary" role="alert">
                    <center>Les mails ont bien été envoyés les équipes sélectionnées du Tournoi de Basket.</center>
                    </div>
        <?php } elseif($_GET['success'] == 11) { ?>
                    <div class="alert alert-secondary" role="alert">
                    <center>Les mails ont bien été envoyés les équipes sélectionnées de l'Escape Game.</center>
                    </div>
        <?php } elseif($_GET['success'] == 'delete') { ?>
                    <div class="alert alert-secondary" role="alert">
                    <center>La suppression d'équipe(s) a bien été validée.</center>
                    </div>
        <?php }} ?>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <ul class="nav nav-tabs" id="register" role="tablist">
              <?php 
                $nbequipesexpress = $bdd->prepare("SELECT * FROM rdeexpressregister");
                $nbequipesexpress->execute();
                $nb = $nbequipesexpress->rowCount();
              ?>
                <li class="nav-item mr-2">
                    <a class="nav-link active" data-toggle="tab" href="#express" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Carolo Express(<?= $nb ?>)</p></a>
                </li>
              <?php 
                $nbequipesexpress->closeCursor();
                $nbequipeswarrior = $bdd->prepare("SELECT * FROM rdewarriorregister");
                $nbequipeswarrior->execute();
                $nb2 = $nbequipeswarrior->rowCount();
              ?>
                <li class="nav-item mr-2">
                    <a class="nav-link" data-toggle="tab" href="#warrior" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Carolo Warrior(<?= $nb2 ?>)</p></a>
                </li>
              <?php 
                $nbequipeswarrior->closeCursor();
                $nbequipescuisine = $bdd->prepare("SELECT * FROM rdecuisineregister");
                $nbequipescuisine->execute();
                $nb3 = $nbequipescuisine->rowCount();
              ?>
                <li class="nav-item mr-2">
                    <a class="nav-link" data-toggle="tab" href="#cuisine" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Concours de Cuisine(<?= $nb3 ?>)</p></a>
                </li>
              <?php 
                $nbequipescuisine->closeCursor();
                $nbequipesgraille = $bdd->prepare("SELECT * FROM rdepiqueniquetregister");
                $nbequipesgraille->execute();
                $nb4 = $nbequipesgraille->rowCount();
              ?>
                <li class="nav-item mr-2">
                    <a class="nav-link" data-toggle="tab" href="#piquenique" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Pique-Nique(<?= $nb4 ?>)</p></a>
                </li>
              <?php 
                $nbequipesgraille->closeCursor();
                $nbequipesbasket = $bdd->prepare("SELECT * FROM rdebasketregister");
                $nbequipesbasket->execute();
                $nb5 = $nbequipesbasket->rowCount();
              ?>
                <li class="nav-item mr-2">
                    <a class="nav-link" data-toggle="tab" href="#basket" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Tournoi de Basket(<?= $nb5 ?>)</p></a>
                </li>
                <!-- <li class="nav-item mr-2">
                    <a class="nav-link" data-toggle="tab" href="#bal" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Bal de la rentrée</p></a>
                </li> -->
              <?php 
                $nbequipesbasket->closeCursor();
                $nbequipesescape = $bdd->prepare("SELECT * FROM rdeescaperegister");
                $nbequipesescape->execute();
                $nb6 = $nbequipesescape->rowCount();
              ?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#escape" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Escape Game(<?= $nb6 ?>)</p></a>
                </li>
                <?php $nbequipesescape->closeCursor(); ?>
                <li class="nav-item mr-2">
                    <a class="nav-link" data-toggle="tab" href="#resultexpress" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Resultats qcm</p></a>
                </li>
            </ul>
        </div>
    </div>


    <div class="mb-5"></div>
        <div class="row justify-content-center">
            <div class="tab-content" id="myTabContent">

                <!-- Express -->

                    <div class="tab-pane fade show active container mt-2" id="express" role="tabpanel" aria-labelledby="register1-tab">
                      <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Nom de l'équipe</th>
                            <th scope="col">Etablissement</th>
                            <th scope="col">Mot de passe</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Mail</th>
                          </tr>
                        </thead>
                        <tbody>


                          <?php
                              $req = $bdd->prepare("SELECT * FROM rdeexpressregister, rdeexpressrelation, rdeparticipants WHERE rdeexpressrelation.participant_id = rdeparticipants.id_participant AND rdeexpressrelation.name_team = rdeexpressregister.team_name ORDER BY rdeexpressregister.team_name ASC");
                              $req->execute();

                              while ($donnees = $req->fetch())
                          { ?>
                          <tr>
                            <th scope="row"><?= $donnees['team_name']; ?></th>
                            <td><?= $donnees['establishment']; ?></td>
                            <td><?= $donnees['password_manif']; ?></td>
                            <td><?= $donnees['name']; ?></td>
                            <td><?= $donnees['first_name']; ?></td>
                            <td><?= $donnees['phone']; ?></td>
                            <td><?= $donnees['mail']; ?></td>
                          </tr>
                          <?php
                              } $req->closecursor();
                          ?>
                        </tbody>
                      </table>
                      <br>
                      <center>
                        <h3>Envoyer un mail à tous les participants du Carolo Express</h3>
                        <form action="mailinscriptions/express.php" method="post">
                          <input type="text" class="form-control" name="objet" placeholder="Sujet"><br>
                          <textarea class="form-control" name="message" placeholder="Message"></textarea><br>
                          <input class="submit-btn" type="submit" value="Envoyer">
                        </form>
                      </center>
                      <br>
                      <br>
                      <center>
                        <h3>Envoyer un mail aux équipes sélectionnées</h3>
                        <form action="mailinscriptions/groupeexpress.php" method="post">

                          <?php
                          $mailgroupeexpress = $bdd->prepare("SELECT team_name FROM rdeexpressregister");
                          $mailgroupeexpress->execute();

                          while ($data = $mailgroupeexpress->fetch()) {
                          ?>
                          <input type="checkbox" name="groupe[<?=$data['team_name']?>]">&nbsp;&nbsp;<?=$data['team_name']?></input><br>
                          <?php } $mailgroupeexpress->closeCursor(); ?>
                          <input type="text" class="form-control" name="objet" placeholder="Sujet"><br>
                          <textarea class="form-control" name="message" placeholder="Message"></textarea><br>
                          <input class="submit-btn" type="submit" value="Envoyer">
                        </form>
                        <br>
                      </center>
                      <br>
                      <br>
                      <center>
                        <h3>Suppression d'équipe(s)</h3>
                        <form action="deleteteams/express.php" method="post">

                          <?php
                          $deletegroupeexpress = $bdd->prepare("SELECT team_name FROM rdeexpressregister");
                          $deletegroupeexpress->execute();

                          while ($data = $deletegroupeexpress->fetch()) {
                          ?>
                          <input type="checkbox" name="groupe[<?=$data['team_name']?>]">&nbsp;&nbsp;<?=$data['team_name']?></input><br>
                          <?php } $deletegroupeexpress->closeCursor(); ?>
                          <br>
                          <input class="submit-btn" type="submit" value="Supprimer">
                        </form>
                        <br>
                      </center>
                    </div>

  <!-- Warrior -->

  <div class="tab-pane fade show container mt-2" id="warrior" role="tabpanel" aria-labelledby="register1-tab">
    <table class="table">
      <thead class="thead-light">
      <tr>
          <th scope="col">Nom de l'équipe</th>
          <th scope="col">Etablissement</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Mail</th>
        </tr>
      </thead>
      <tbody>


      <?php
            $req2 = $bdd->prepare("SELECT * FROM rdewarriorregister, rdewarriorrelation, rdeparticipants WHERE rdewarriorrelation.participant_id = rdeparticipants.id_participant AND rdewarriorrelation.name_team = rdewarriorregister.team_name ORDER BY rdewarriorregister.team_name ASC");
            $req2->execute();

            while ($donnees = $req2->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['team_name']; ?></th>
          <td><?= $donnees['establishment']; ?></td>
          <td><?= $donnees['name']; ?></td>
          <td><?= $donnees['first_name']; ?></td>
          <td><?= $donnees['phone']; ?></td>
          <td><?= $donnees['mail']; ?></td>
        </tr>
        <?php
            } $req2->closecursor();
        ?>
      </tbody>
    </table>
    <br>
    <center>
      <h3>Envoyer un mail à tous les participants du Carolo Warrior</h3>
      <form action="mailinscriptions/warrior.php" method="post">
        <input type="text" class="form-control" name="objet" placeholder="Sujet"><br>
        <textarea class="form-control" name="message" placeholder="Message"></textarea><br>
        <input class="submit-btn" type="submit" value="Envoyer">
      </form>
    </center>
    <br>
    <br>
    <center>
      <h3>Envoyer un mail aux équipes sélectionnées</h3>
      <form action="mailinscriptions/groupewarrior.php" method="post">

        <?php
        $mailgroupewarrior = $bdd->prepare("SELECT team_name FROM rdewarriorregister");
        $mailgroupewarrior->execute();

        while ($data = $mailgroupewarrior->fetch()) {
        ?>
        <input type="checkbox" name="groupe[<?=$data['team_name']?>]">&nbsp;&nbsp;<?=$data['team_name']?></input><br>
        <?php } $mailgroupewarrior->closeCursor(); ?>
        <input type="text" class="form-control" name="objet" placeholder="Sujet"><br>
        <textarea class="form-control" name="message" placeholder="Message"></textarea><br>
        <input class="submit-btn" type="submit" value="Envoyer">
      </form>
      <br>
    </center>
    <br>
    <br>
    <center>
      <h3>Suppression d'équipe(s)</h3>
      <form action="deleteteams/warrior.php" method="post">

        <?php
        $deletegroupewarrior = $bdd->prepare("SELECT team_name FROM rdewarriorregister");
        $deletegroupewarrior->execute();

        while ($data = $deletegroupewarrior->fetch()) {
        ?>
        <input type="checkbox" name="groupe[<?=$data['team_name']?>]">&nbsp;&nbsp;<?=$data['team_name']?></input><br>
        <?php } $deletegroupewarrior->closeCursor(); ?>
        <br>
        <input class="submit-btn" type="submit" value="Supprimer">
      </form>
      <br>
    </center>
  </div>

  <!-- Cuisine -->

  <div class="tab-pane fade show container mt-2" id="cuisine" role="tabpanel" aria-labelledby="register1-tab">
  <?php
        $req5 = $bdd->prepare("SELECT * FROM rdecuisineregister");
        $req5->execute();
        $placescuisine = $req5->rowCount();
        $req5->closeCursor();

      ?>

<h4 class="text-center font-weight-light font-italic text-black-50 mt-4 mb-5">Il y a actuellement <?= $placescuisine ?> équipes inscrites.</h4>

    <table class="table">
      <thead class="thead-light">
      <tr>
          <th scope="col">Nom de l'équipe</th>
          <th scope="col">Etablissement</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Mail</th>
        </tr>
      </thead>
      <tbody>


      <?php
            $req3 = $bdd->prepare("SELECT * FROM rdecuisineregister, rdecuisinerelation, rdeparticipants WHERE rdecuisinerelation.participant_id = rdeparticipants.id_participant AND rdecuisinerelation.name_team = rdecuisineregister.team_name ORDER BY rdecuisineregister.team_name ASC");
            $req3->execute();

            while ($donnees = $req3->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['team_name']; ?></th>
          <td><?= $donnees['establishment']; ?></td>
          <td><?= $donnees['name']; ?></td>
          <td><?= $donnees['first_name']; ?></td>
          <td><?= $donnees['phone']; ?></td>
          <td><?= $donnees['mail']; ?></td>
        </tr>
        <?php
            } $req3->closecursor();
        ?>
      </tbody>
    </table>
    <br>
    <center>
      <h3>Envoyer un mail à tous les participants du Concours de Cuisine</h3>
      <form action="mailinscriptions/cuisine.php" method="post">
        <input type="text" class="form-control" name="objet" placeholder="Sujet"><br>
        <textarea class="form-control" name="message" placeholder="Message"></textarea><br>
        <input class="submit-btn" type="submit" value="Envoyer">
      </form>
    </center>
    <br>
    <br>
    <center>
      <h3>Envoyer un mail aux équipes sélectionnées</h3>
      <form action="mailinscriptions/groupecuisine.php" method="post">

        <?php
        $mailgroupecuisine = $bdd->prepare("SELECT team_name FROM rdecuisineregister");
        $mailgroupecuisine->execute();

        while ($data = $mailgroupecuisine->fetch()) {
        ?>
        <input type="checkbox" name="groupe[<?=$data['team_name']?>]">&nbsp;&nbsp;<?=$data['team_name']?></input><br>
        <?php } $mailgroupecuisine->closeCursor(); ?>
        <input type="text" class="form-control" name="objet" placeholder="Sujet"><br>
        <textarea class="form-control" name="message" placeholder="Message"></textarea><br>
        <input class="submit-btn" type="submit" value="Envoyer">
      </form>
      <br>
    </center>
    <br>
    <br>
    <center>
      <h3>Suppression d'équipe(s)</h3>
      <form action="deleteteams/cuisine.php" method="post">

        <?php
        $deletegroupecuisine = $bdd->prepare("SELECT team_name FROM rdecuisineregister");
        $deletegroupecuisine->execute();

        while ($data = $deletegroupecuisine->fetch()) {
        ?>
        <input type="checkbox" name="groupe[<?=$data['team_name']?>]">&nbsp;&nbsp;<?=$data['team_name']?></input><br>
        <?php } $deletegroupecuisine->closeCursor(); ?>
        <br>
        <input class="submit-btn" type="submit" value="Supprimer">
      </form>
      <br>
    </center>
  </div>

  <!-- Pique-nique -->

  <div class="tab-pane fade show container mt-2" id="piquenique" role="tabpanel" aria-labelledby="register1-tab">
        <?php
            $req4 = $bdd->prepare("SELECT * FROM rdepiqueniquetregister ORDER BY name ASC");
            $req4->execute(); 
            $placescount = $req4->rowCount();
            $placesrestantes = 200 - $placescount;?>

<h4 class="text-center font-weight-light font-italic text-black-50 mt-4 mb-5">Il reste <?= $placesrestantes ?> repas à 3€ (<?= $placescount ?> inscriptions)</h4>

    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Etablissement</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>



            <?php $i = 1; 
            while ($donnees = $req4->fetch()) { ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td><?= $donnees['establishment']; ?></td>
              <td><?= $donnees['name']; ?></td>
              <td><?= $donnees['first_name']; ?></td>
              <td><?= $donnees['phone']; ?></td>
              <td><?= $donnees['mail']; ?></td>
            </tr>
            <?php $i++;
            }
            $req4->closecursor();
        ?>
      </tbody>
    </table>
    <br>
    <center>
      <h3>Envoyer un mail à tous les participants du Pique-Nique</h3>
      <form action="mailinscriptions/piquenique.php" method="post">
        <input type="text" class="form-control" name="objet" placeholder="Sujet"><br>
        <textarea class="form-control" name="message" placeholder="Message"></textarea><br>
        <input class="submit-btn" type="submit" value="Envoyer">
      </form>
    </center>
    <br>
  </div>

  <!-- Basket -->

  <div class="tab-pane fade show container mt-2" id="basket" role="tabpanel" aria-labelledby="register1-tab">
    <table class="table">
      <thead class="thead-light">
      <tr>
          <th scope="col">Nom de l'équipe</th>
          <th scope="col">Etablissement</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Mail</th>
        </tr>
      </thead>
      <tbody>


      <?php
            $req6 = $bdd->prepare("SELECT * FROM rdebasketregister, rdebasketrelation, rdeparticipants WHERE rdebasketrelation.participant_id = rdeparticipants.id_participant AND rdebasketrelation.name_team = rdebasketregister.team_name ORDER BY rdebasketregister.team_name ASC");
            $req6->execute();

            while ($donnees = $req6->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['team_name']; ?></th>
          <td><?= $donnees['establishment']; ?></td>
          <td><?= $donnees['name']; ?></td>
          <td><?= $donnees['first_name']; ?></td>
          <td><?= $donnees['phone']; ?></td>
          <td><?= $donnees['mail']; ?></td>
        </tr>
        <?php
            } $req6->closecursor();
        ?>
      </tbody>
    </table>
    <br>
    <center>
      <h3>Envoyer un mail à tous les participants du Tournoi de Basket</h3>
      <form action="mailinscriptions/basket.php" method="post">
        <input type="text" class="form-control" name="objet" placeholder="Sujet"><br>
        <textarea class="form-control" name="message" placeholder="Message"></textarea><br>
        <input class="submit-btn" type="submit" value="Envoyer">
      </form>
    </center>
    <br>
    <br>
    <center>
      <h3>Envoyer un mail aux équipes sélectionnées</h3>
      <form action="mailinscriptions/groupebasket.php" method="post">

        <?php
        $mailgroupebasket = $bdd->prepare("SELECT team_name FROM rdebasketregister");
        $mailgroupebasket->execute();

        while ($data = $mailgroupebasket->fetch()) {
        ?>
        <input type="checkbox" name="groupe[<?=$data['team_name']?>]">&nbsp;&nbsp;<?=$data['team_name']?></input><br>
        <?php } $mailgroupebasket->closeCursor(); ?>
        <input type="text" class="form-control" name="objet" placeholder="Sujet"><br>
        <textarea class="form-control" name="message" placeholder="Message"></textarea><br>
        <input class="submit-btn" type="submit" value="Envoyer">
      </form>
      <br>
    </center>
    <br>
    <br>
    <center>
      <h3>Suppression d'équipe(s)</h3>
      <form action="deleteteams/basket.php" method="post">

        <?php
        $deletegroupebasket = $bdd->prepare("SELECT team_name FROM rdebasketregister");
        $deletegroupebasket->execute();

        while ($data = $deletegroupebasket->fetch()) {
        ?>
        <input type="checkbox" name="groupe[<?=$data['team_name']?>]">&nbsp;&nbsp;<?=$data['team_name']?></input><br>
        <?php } $deletegroupebasket->closeCursor(); ?>
        <br>
        <input class="submit-btn" type="submit" value="Supprimer">
      </form>
      <br>
    </center>
  </div>

  <!-- Bal -->

  <!-- <div class="tab-pane fade show container mt-2" id="bal" role="tabpanel" aria-labelledby="register1-tab">
    <table class="table">
      <thead class="thead-light">
      <tr>
          <th scope="col">Etablissement</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody> -->


        <?php
            // $req6 = $bdd->prepare("SELECT * FROM RDEBalregister, rdeparticipants WHERE RDEBalregister.participant_id = rdeparticipants.id_participant ORDER BY rdeparticipants.name ASC");
            // $req6->execute();

            // while ($donnees = $req6->fetch())
        //{ ?>
        <!-- <tr>
          <th scope="row"><?= $donnees['establishment']; ?></th>
          <td><?= $donnees['name']; ?></td>
          <td><?= $donnees['first_name']; ?></td>
          <td><?= $donnees['phone']; ?></td>
          <td><?= $donnees['mail']; ?></td>
        </tr> -->
        <?php
            // }
            // $req6->closecursor();
        ?>
      <!-- </tbody>
    </table>
  </div> -->

  <!-- Escape -->

  <div class="tab-pane fade show container mt-2" id="escape" role="tabpanel" aria-labelledby="register1-tab">
    <table class="table">
      <thead class="thead-light">
      <tr>
      <th scope="row">Nom d'équipe</th>
          <th scope="col">Etablissement</th>
          <th scope="col">Nombre de participants</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Mail</th>
        </tr>
      </thead>
      <tbody>


      <?php
            $req7 = $bdd->prepare("SELECT * FROM rdeescaperegister, rdeparticipants WHERE rdeescaperegister.id_participant = rdeparticipants.id_participant ORDER BY rdeescaperegister.id_participant ASC");
            $req7->execute();

            while ($donnees = $req7->fetch())
        { ?>
        <tr>
        <th scope="row"><?= $donnees['team_name']; ?></th>
          <td><?= $donnees['establishment']; ?></td>
          <td><?= $donnees['nbpart']; ?></td>
          <td><?= $donnees['name']; ?></td>
          <td><?= $donnees['first_name']; ?></td>
          <td><?= $donnees['phone']; ?></td>
          <td><?= $donnees['mail']; ?></td>
        </tr>
        <?php
            } $req7->closecursor();
        ?>
      </tbody>
    </table>
    <br>
    <center>
      <h3>Envoyer un mail à tous les participants de l'Escape Game</h3>
      <form action="mailinscriptions/escape.php" method="post">
        <input type="text" class="form-control" name="objet" placeholder="Sujet"><br>
        <textarea class="form-control" name="message" placeholder="Message"></textarea><br>
        <input class="submit-btn" type="submit" value="Envoyer">
      </form>
    </center>
    <br>
    <br>
    <center>
      <h3>Envoyer un mail aux équipes sélectionnées</h3>
      <form action="mailinscriptions/groupeescape.php" method="post">

        <?php
        $mailgroupeescape = $bdd->prepare("SELECT team_name FROM rdeescaperegister");
        $mailgroupeescape->execute();

        while ($data = $mailgroupeescape->fetch()) {
        ?>
        <input type="checkbox" name="groupe[<?=$data['team_name']?>]">&nbsp;&nbsp;<?=$data['team_name']?></input><br>
        <?php } $mailgroupeescape->closeCursor(); ?>
        <input type="text" class="form-control" name="objet" placeholder="Sujet"><br>
        <textarea class="form-control" name="message" placeholder="Message"></textarea><br>
        <input class="submit-btn" type="submit" value="Envoyer">
      </form>
      <br>
    </center>
    <br>
    <br>
    <center>
      <h3>Suppression d'équipe(s)</h3>
      <form action="deleteteams/escape.php" method="post">

        <?php
        $deletegroupeescape = $bdd->prepare("SELECT team_name FROM rdeescaperegister");
        $deletegroupeescape->execute();

        while ($data = $deletegroupeescape->fetch()) {
        ?>
        <input type="checkbox" name="groupe[<?=$data['team_name']?>]">&nbsp;&nbsp;<?=$data['team_name']?></input><br>
        <?php } $deletegroupeescape->closeCursor(); ?>
        <br>
        <input class="submit-btn" type="submit" value="Supprimer">
      </form>
      <br>
    </center>
  </div>


    <div class="tab-pane fade show container mt-2" id="resultexpress" role="tabpanel" aria-labelledby="register1-tab">
    <table class="table">
      <thead class="thead-light">
      <tr>
          <th scope="col">Nom de l'équipe</th>
          <td>Heure de fin</td>
          <td>Points</td>
        </tr>
      </thead>
      <tbody>

      <?php
                              $reqpoints = $bdd->prepare("SELECT * FROM rdeexpressregister");
                              $reqpoints->execute();

                              while ($donnees = $reqpoints->fetch())
                          { ?>
                          <tr>
                            <th scope="row"><a href="resultats.php?team=<?= $donnees['team_name']; ?>" style="text-decoration:none;"><?= $donnees['team_name']; ?></a></th>
                            <?php if(!empty($donnees['heure_fin'])) {?>
                              <td><?= $donnees['heure_fin']; ?></td>
                            <?php } ?>
                            <?php if(!empty($donnees['total'])) {?>
                              <td><?= $donnees['total']; ?></td>
                            <?php } ?>
                            </tr>
                          <?php
                              } $reqpoints->closecursor();
                          ?>
                        </tbody>
                      </table>
                      <br>
                    </div>
                    
            </div>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
  </script>

</body>
</html>
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

<h1 class="text-center font-weight-light font-italic text-black-50 mt-4 mb-5">Accès au détail pour chaque équipe</h1>
    <center><a href="../index.php" class="text-black-50 mb-5">Revenir à l'accueil</a></center>
    <center><a href="admin.php" class="text-black-50 mt-5 mb-5">Retour dans l'interface Administrateur</a></center>
    <center><a href="inscriptions.php" class="text-black-50 mt-5 mb-5">Accès aux inscriptions</a></center>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <ul class="nav nav-tabs" id="register" role="tablist">
                <li class="nav-item mr-2">
                    <a class="nav-link active" data-toggle="tab" href="#mairie" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Mairie</p></a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" data-toggle="tab" href="#mediatheque" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Mediatheque</p></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="mb-5"></div>
        <div class="row justify-content-center">
            <div class="tab-content" id="myTabContent">

            <!-- Mairie -->

                <div class="tab-pane fade show active container mt-2" id="mairie" role="tabpanel" aria-labelledby="register-tab">
                    <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">Nom de l'équipe</th>
                        <th scope="col">Emplacement</th>
                        <th scope="col">Points pour l'emplacement</th>
                        <th scope="col">Heure de validation</th>
                        <th scope="col">Réponse donnée</th>
                        <th scope="col">Photo challenge</th>
                        <th scope="col">télécharger la photo</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                            $req = $bdd->prepare("SELECT * FROM pointsqcm, reponses WHERE pointsqcm.reponse = reponses.reponse_id AND emplacement='mairie' ORDER BY pointsqcm.team_name ASC");
                            $req->execute();

                            while ($donnees = $req->fetch())
                        { ?>
                        <tr>
                        <th scope="row"><?= $donnees['team_name']; ?></th>
                        <td><?= $donnees['emplacement']; ?></td>
                        <td><?= $donnees['points']; ?></td>
                        <td><?= $donnees['heure']; ?></td>
                        <td><?= $donnees['reponse_name']; ?></td>
                        <td><img src="../qcm/img_user/<?= $donnees['image']; ?>" style="width:auto;height:200px;"></td>
                        <td><center><a class="btn btn-primary" href="../qcm/img_user/<?= $donnees['image']; ?>" download="<?= $donnees['image']; ?>">Télécharger</a></center></td>
                        </tr>
                        <?php
                            } $req->closecursor();
                        ?>
                    </tbody>
                    </table>
                </div>

                    <!-- Mediatheque -->

                <div class="tab-pane fade show container mt-2" id="mediatheque" role="tabpanel" aria-labelledby="register-tab">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Nom de l'équipe</th>
                            <th scope="col">Emplacement</th>
                            <th scope="col">Points pour l'emplacement</th>
                            <th scope="col">Heure de validation</th>
                            <th scope="col">Réponse donnée</th>
                        </tr>
                        </thead>
                        <tbody>


                        <?php
                            $req = $bdd->prepare("SELECT * FROM pointsqcm, reponses WHERE pointsqcm.reponse = reponses.reponse_id AND emplacement='mediatheque' ORDER BY pointsqcm.team_name ASC");
                            $req->execute();

                            while ($donnees = $req->fetch())
                        { ?>
                        <tr>
                            <th scope="row"><?= $donnees['team_name']; ?></th>
                            <td><?= $donnees['emplacement']; ?></td>
                            <td><?= $donnees['points']; ?></td>
                            <td><?= $donnees['heure']; ?></td>
                            <td><?= $donnees['reponse_name']; ?></td>
                        </tr>
                        <?php
                            } $req->closecursor();
                        ?>
                        </tbody>
                    </table>
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
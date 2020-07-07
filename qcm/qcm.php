<?php session_start();
include ('../include/connexiondbval.php'); 
$team = $_SESSION['team'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Express</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-6724419004010752",
		enable_page_level_ads: true
	});
	</script>
<style type="text/css">
        #map {
            /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
            height: 500px;
            width: 100%;
        }

        #map canvas {
            position: relative !important;
        }
    </style>
</head>

<body style="background-image:linear-gradient(50deg, #273180, #2591AA);">
    <div class="container-fluid">
		<div class="mx-auto border rounded mt-5 mb-5 d-flex flex-column justify-content-between align-items-center" style="background-color:white;box-shadow:0 0 1em white;width:90%;">
		<div id="demotext"><strong>Carolo Express</strong></div>
			<div class="progress w-75 m-2">
			<?php
			$progressbar = $bdd->prepare("SELECT * FROM pointsqcm WHERE team_name='$team'");
			$progressbar->execute();

			$count = $progressbar->rowCount();
			if($count==0) {?>
				<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
			<?php } elseif ($count==1) {?>
				<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
			<?php } elseif ($count==2) {?>
				<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
			<?php } ?>
            </div>
            <?php if(isset($_GET['success'])) {
                if($_GET['success'] == 1) {?>
                    <div class="alert alert-danger" role="alert">
                    Votre code est faux, merci de réessayer.
                    </div>
                <?php } if($_GET['success'] == 2) {?>
                    <div class="alert alert-danger" role="alert">
                    Vous avez déjà effectué le quizz pour cet emplacement.
                    </div>
                <?php } if($_GET['success'] == 3) {?>
                    <div class="alert alert-success" role="alert">
                    Vos points ont été enregistrés, vous pouvez continuer la course!
                    </div>
				<?php } if($_GET['success'] == 4) {?>
                    <div class="alert alert-danger" role="alert">
                    Le qr code scanné ou le mot de passe entré est erroné.
                    </div>
            <?php }} ?>
            <div class="etape mt-2">
                <h2 class="h4">
					<?php if($count==0) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
							Étape <span class="cStep">0</span> / <span class="mStep">2</span>
						</span>
					<?php } elseif ($count==1) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">1</span> / <span class="mStep">2</span>
						</span>
					<?php } elseif ($count==2) {?>
						<center><span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">2</span> / <span class="mStep">2</span>
						</span></center>
						<center>Félicitations, vous avez terminé le QCM ! Rendez-vous à la Place Ducale pour la fin de l'épreuve.</center>	
					<?php } ?>
					<?php $progressbar->closeCursor(); ?>
                </h2>
            </div>
            <div class="logo m-2"><img src="../assets/img/mascotte_nuage.png"
					style="width:100%;height:auto;"></div>
                    <!-- qr code -->
					<center><h4 class="mb-3 mt-3">Scannez le QRCode</h4></center>
                    <div class="container-fluid" id="a_masquer">
		<div class="row">			
			<div class="col">
				<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
				
				<div class="col-sm-12">
					<video id="preview" class="p-1 border" style="width:100%;"></video>
				</div>
				<script type="text/javascript">
					var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
					scanner.addListener('scan',function(content){
						alert("début du quiz !!",location.href=content);
						//content;
					});
					Instascan.Camera.getCameras().then(function (cameras){
						if(cameras.length>0){
							scanner.start(cameras[0]);
							$('[name="options"]').on('change',function(){
								if($(this).val()==1){
									if(cameras[0]!=""){
										scanner.start(cameras[0]);
									}else{
										alert('No Front camera found!');
									}
								}else if($(this).val()==2){
									if(cameras[1]!=""){
										scanner.start(cameras[1]);
									}else{
										alert('No Back camera found!');
									}
								}
							});
						}else{
							console.error('No cameras found.');
							alert('No cameras found.');
						}
					}).catch(function(e){
						console.error(e);
						alert(e);
					});
				</script><center>
				<div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
				  <label class="btn btn-primary active">
					<input type="radio" name="options" value="1" autocomplete="off" checked> Camera Avant
				  </label>
				  <label class="btn btn-secondary">
					<input type="radio" name="options" value="2" autocomplete="off"> Camera Arrière
				  </label>
				</div></center>
			</div>		
		</div>
	</div>

	<input type="button" class="btn btn-primary" id="qrcode" value="Masquer la Camera" onclick="masquer_div('a_masquer');" />
	<script>
	function masquer_div(id)
	{
	  if (document.getElementById(id).style.display == 'none')
	  {
		   document.getElementById(id).style.display = 'block';
		   document.getElementById('qrcode').value = 'Masquer la Camera';
	  }
	  else
	  {
		   document.getElementById(id).style.display = 'none';
		   document.getElementById('qrcode').value = 'Afficher la Camera';
		   document.getElementById('qrcode').style = 'margin-top:20px;';
	  }
	}

	</script>
	<br>
    <!-- fin q code -->
            <center><h4 class="mb-3">Ou entrez le mot de passe</h4></center>
            <form action="traitements/codes.php" method="post">
                <div class="form text-center m-2"><input type="text" placeholder="Entrez le code" name="code"><br><button type="submit"
                        class="btn btn-primary m-2">Valider</button></div>
            </form>
        </div>
    </div>

	<div class="map">
        <div class="row mx-0 mb-4">
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-0 col-0"></div>
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 col-0 position-relative">
                <div class="position-absolute blur">
                    <div class="d-flex align-items-center justify-content-center h-100 w-100">
                    </div>
                </div>
                <iframe class="shadow-lg" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=4.679832458496095%2C49.75884086990659%2C4.751501083374023%2C49.78442298138881&amp;layer=transportmap" style="">
                </iframe>
                <div id="map"></div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-0 col-0"></div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
	    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.0/build/ol.js"></script>
    <script src="assets/js/map.js"></script>
	<script>
        function showMap() {
            $('.blur').fadeOut();
        }
    </script>
</body>

</html>
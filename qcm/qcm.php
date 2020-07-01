<?php session_start();?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Express</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut icon" href="https://learncodeweb.com/demo/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-6724419004010752",
		enable_page_level_ads: true
	  });
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131906273-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-131906273-1');
	</script>
</head>

<body style="background-color:#0062AD">
    <div class="container-fluid">
        <div class="mx-auto border rounded mt-5 mb-5 d-flex flex-column justify-content-between align-items-center" style="background-color:white;box-shadow:0 0 1em white;width:90%;">
            <div class="progress w-75 m-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
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
            <?php }} ?>
            <div class="etape">
                <h2 class="h4">
                    <span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        Étape <span class="cStep">1</span> / <span class="mStep">5</span>
                    </span>
                </h2>
            </div>
            <div class="logo m-2"><img src="../img/logoetudiantcarolo_bleu.png"
                    style="width:150px;height:auto;"></div>

                    <!-- qr code -->

                    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- demo left sidebar -->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-6724419004010752"
					 data-ad-slot="7706376079"
					 data-ad-format="auto"
					 data-full-width-responsive="true"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			
			<div class="col">
				<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
				<center><h1><a href="https://learncodeweb.com/phonegap/how-to-use-instascan-an-html5-qr-scanner/">Scanner le QRCode</a></h1></center>
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
				<div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
				  <label class="btn btn-primary active">
					<input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
				  </label>
				  <label class="btn btn-secondary">
					<input type="radio" name="options" value="2" autocomplete="off"> Back Camera
				  </label>
				</div></center>
			</div>
			
			
			<div class="col-sm-3">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- demo left sidebar -->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-6724419004010752"
					 data-ad-slot="7706376079"
					 data-ad-format="auto"
					 data-full-width-responsive="true"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		
		</div>
	</div>
    <!-- fin qr code -->
            <form action="traitements/codes.php" method="post">
                <div class="form text-center m-2"><input type="text" placeholder="Entrez le code" name="code"><br><button type="submit"
                        class="btn btn-primary m-2">Valider</button></div>
            </form>
        </div>
    </div>

    <div class="maps mt-5 mx-auto" style="width:85%;">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1EWmjwCaoJ6LaRPnHiKMLUj_26w6ogDTj" width="100%" height="550"></iframe>
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
</body>

</html>
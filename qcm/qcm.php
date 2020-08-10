<?php session_start();
include ('../include/connexiondbval.php'); 
$team = $_SESSION['team'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
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
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 6.25%"></div>
			<?php } elseif ($count==2) {?>
				<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 12.5%"></div>
			<?php } elseif ($count==3) {?>
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 18.75%"></div>
            <?php } elseif ($count==4) {?>
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
            <?php } elseif ($count==5) {?>
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 31.25%"></div>
            <?php } elseif ($count==6) {?>
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 37.5%"></div>
            <?php } elseif ($count==7) {?>
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 43.75%"></div>
            <?php } elseif ($count==8) {?>
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            <?php } elseif ($count==9) {?>
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 56.25%"></div>
            <?php } elseif ($count==10) {?>
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 62.5%"></div>
            <?php } elseif ($count==11) {?>
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 68.75%"></div>
            <?php } elseif ($count==12) {?>
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            <?php } elseif ($count==13) {?>
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 81.25%"></div>
            <?php } elseif ($count==14) {?>
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 87.5%"></div>
            <?php } elseif ($count==15) {?>
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 93.75%"></div>
            <?php } elseif ($count==16) {?>
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
							Étape <span class="cStep">0</span> / <span class="mStep">16</span>
						</span>
					<?php } elseif ($count==1) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">1</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==2) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">2</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==3) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">3</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==4) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">4</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==5) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">5</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==6) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">6</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==7) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">7</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==8) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">8</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==9) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">9</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==10) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">10</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==11) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">11</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==12) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">12</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==13) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">13</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==14) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">14</span> / <span class="mStep">16</span>
						</span>
                    <?php } elseif ($count==15) {?>
						<span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">15</span> / <span class="mStep">16</span>
						</span>
					<?php } elseif ($count==16) {?>
						<center><span class="badge badge-pill badge-dark" style="padding: .5rem 1rem;">
                        	Étape <span class="cStep">16</span> / <span class="mStep">16</span>
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
					<video id="preview" class="p-1 border video-back" style="width:100%;" playsinline></video>
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
                <!-- <iframe class="shadow-lg" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=4.679832458496095%2C49.75884086990659%2C4.751501083374023%2C49.78442298138881&amp;layer=transportmap" style="">
                </iframe> -->
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
	<script>
        function showMap() {
            $('.blur').fadeOut();
        }
	</script>
	
	<script>

		// On initialise la latitude et la longitude de Paris (centre de la carte)

var lat = 49.77003;

var lon = 4.71955;

var macarte = null;

var geolocation = null;

var MarkerLayer = null;



var UserD = {

    Marker: null,

    feature: null,

    Latitude: 0,

    Longitude: 0

}



var Markers = [

	<?php 
	$lieux = $bdd->prepare("SELECT * FROM pointsqcm WHERE emplacement='mairie' AND team_name='$team'");
	$lieux->execute();
	$count = $lieux->rowCount();

	if($count==0){?>
    {

        lat: 49.773593,

        lng: 4.719961,

        is_enabled: true,

	},
	<?php } ?>

	<?php 
	$lieux = $bdd->prepare("SELECT * FROM pointsqcm WHERE emplacement='hotel de ville' AND team_name='$team'");
	$lieux->execute();
	$count = $lieux->rowCount();

	if($count==0){?>
    {

        lat: 49.760273,

        lng: 4.719268,

        is_enabled: true,

	},
    <?php } ?>

    {

        lat: 49.681247,

        lng: 4.655524,

        is_enabled: true,

    },
    {

        lat: 49.430910,

        lng: 4.843672,

        is_enabled: true,

    },

];



var attribution = new ol.control.Attribution({

    collapsible: false

});



function calcCrow(lat1, lon1, lat2, lon2) {

    var R = 6371; // km

    var dLat = toRad(lat2 - lat1);

    var dLon = toRad(lon2 - lon1);

    var lat1 = toRad(lat1);

    var lat2 = toRad(lat2);



    var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +

        Math.sin(dLon / 2) * Math.sin(dLon / 2) * Math.cos(lat1) * Math.cos(lat2);

    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

    var d = R * c;

    return d;

}



function toRad(Value) {

    return Value * Math.PI / 180;

}



function initMap() {

    macarte = new ol.Map({

        controls: ol.control.defaults({attribution: false}).extend([attribution]),

        target: 'map',

        layers: [

            new ol.layer.Tile({

                source: new ol.source.OSM()

            })

        ],

        view: new ol.View({

            center: ol.proj.fromLonLat([lon, lat]),

            zoom: 14

        })

    });

}



function createMarkers() {

    var features = [];



    for (var i = 0; i < Markers.length; i++) {

        var item = Markers[i];

        var longitude = item.lng;

        var latitude = item.lat;



        if (item.is_enabled) {

            var iconFeature = new ol.Feature({

                geometry: new ol.geom.Point(ol.proj.transform([longitude, latitude], 'EPSG:4326', 'EPSG:3857'))

            });



            var iconStyle = new ol.style.Style({

                image: new ol.style.Icon(({

                    anchor: [0.5, 1],

                    src: "https://cdn.mapmarker.io/api/v1/pin?size=32&hoffset=1&background=DB2B39"

                }))

            });



            iconFeature.setStyle(iconStyle);

            features.push(iconFeature);



            Markers[i].Marker = iconFeature;

        }

    }



    var vectorSource = new ol.source.Vector({

        features: features

    });



    var vectorLayer = new ol.layer.Vector({

        source: vectorSource

    });



    MarkerLayer = vectorLayer;

    macarte.addLayer(vectorLayer);

}



function deleteMarker(QuestionId) {

    var mDatas;

    for (var i = 0; i < Markers.length; i++) {

        var item = Markers[i];



        if (item.question_id == QuestionId) {

            mDatas = Markers[i];

            Markers[i].is_enabled = false;

        }

    }



    if (mDatas) {

        macarte.removeLayer(MarkerLayer);

        createMarkers();

    }

}



function createUserMarker(User) {

    var features = [];



    var item = User;

    var longitude = item.lng;

    var latitude = item.lat;



    var iconFeature = new ol.Feature({

        geometry: new ol.geom.Point(ol.proj.transform([longitude, latitude], 'EPSG:4326', 'EPSG:3857'))

    });



    var iconStyle = new ol.style.Style({

        image: new ol.style.Icon(({

            anchor: [0.5, 1],

            src: "https://cdn.mapmarker.io/api/v1/pin?size=32&hoffset=1&background=00ABE7"

        }))

    });



    iconFeature.setStyle(iconStyle);

    features.push(iconFeature);





    var vectorSource = new ol.source.Vector({

        features: features

    });



    var vectorLayer = new ol.layer.Vector({

        source: vectorSource

    });



    UserD.Latitude = User.lat;

    UserD.Longitude = User.lon;

    UserD.Marker = vectorLayer;

    UserD.feature = iconFeature;



    macarte.addLayer(vectorLayer);

}



function checkDistance(QuestionId) {

    var mDatas;

   for (var i = 0; i < Markers.length; i++) {

        var item = Markers[i];

        

        if (item.question_id == QuestionId) {

            mDatas = Markers[i];

        }

   }



    if (mDatas) {

        var distance = calcCrow(mDatas.lat, mDatas.lng, UserD.Latitude, UserD.Longitude) * 1000

        return distance;

    }

 }



$(document).keypress(function() {
    checkDistance(45);

});



$(document).ready(function() {

    initMap();

    createMarkers();



    var view = new ol.View({

        center: [lon, lat],

        zoom: 2

    });



    geolocation = new ol.Geolocation({

        trackingOptions: {

            enableHighAccuracy: false

        },

        projection: view.getProjection()

    });



    geolocation.setTracking(true);



   createUserMarker({

      lat: lat,

        lng: lon

   })



    geolocation.on('change:position', function () {

        var coords = geolocation.position_;



        macarte.setView(new ol.View({

           center: ol.proj.fromLonLat([coords[0], coords[1]]),

            zoom: 16
        }));



       var pos = { longitude: coords[0], latitude: coords[1] }

        UserD.Latitude = pos.latitude;

        UserD.Longitude = pos.longitude;



        UserD.feature.setGeometry(new ol.geom.Point(geolocation.getPosition()));

    });

});
	</script>
    <script type="text/javascript" src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
<script>
scanner = new Instascan.Scanner({ video: video, scanPeriod: 4, mirror:false })
                .then(handleSuccess)
                .catch(handleError);
             //Start scanning
            scanner.addListener('scan', foundCode);

            Instascan.Camera.getCameras().then(function (cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                }
                if (cameras.length > 1) {
                    scanner.start(cameras[1]);
                }
                 
             });
</script>

</body>

</html>
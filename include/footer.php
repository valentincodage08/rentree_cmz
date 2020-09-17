<?php require_once('connexiondbval.php'); ?>
<Footer>
    <p class="footertitle">Partenaires</p>
    <div class="mx-auto container_footer">

        <?php $req = $bdd->prepare("SELECT * FROM rdepartners");
          $req->execute();

          while( $partner = $req->fetch() ) {
  
    ?>

        <div>
            <a href="<?= $partner['website_link'] ?>" target="_blank"><img src="img/<?= $partner['image'] ?>" class="hvr-pulse" alt="<?= $partner['alt'] ?>"></a>
        </div>

          <?php } ?>
    </div>

    <div class="copy"><a href="mention.php" style="text-decoration:none; color:white">Mentions Légales</a></div>
    <div class="copy">© Copyright 2020 <a href="http://jupinet.simplon-charleville.fr/portfolio/" target="_blank">JJ</a>.<a href="http://desouza.simplon-charleville.fr/portfolio/" target="_blank">Yoyo</a>.<a href="http://demandat.simplon-charleville.fr/portfolio/" target="_blank">Val</a>.<a href="http://beenen.simplon-charleville.fr/portfolio/" target="_blank">Antho</a></div>
</footer>


<!-- Footer 1 -->
<!-- <div class="container-fluid">
    <div class="row bg-yellow-light height-mid">
        <div class="col-12 col-blue-dark my-auto text-center">Footer 1</div>
    </div> -->

<!-- Footer 2 -->
<!-- <div class="row bg-azur-light height-small">
        <div class="col-12 col-blue-dark my-auto text-center">Footer 2</div>
    </div>
</div> -->
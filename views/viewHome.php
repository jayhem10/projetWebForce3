<?php $titre = 'BeTheNext'; ?>

<?php ob_start(); ?>

<div class="hover">
    <img src="img/index2.jpg" style="height:100vh width:100%" class="img-fluid" alt="Responsive image"><h2 class="titreindex">ENTER THE GAME</h2>
</div>


<div class="text-center titre2">
<h2> ENTREZ DANS LE GAME ET SUIVEZ LES PLUS GRANDS SPORTIFS DU MOMENT</h2>
</div>

<!-- LE CAROUSEL -->
<div class="container">

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="img/LBJ_1.jpg" class="d-block w-100" alt="First Slide">
          <div class="carousel-caption">
            <h5 class="text-warning">LEBRON JAMES</h5>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/CR7_0.jpg" class="d-block w-100" alt="Second Slide">
          <div class="carousel-caption">
            <h5 class="text-warning">CHRISTIANO RONALDO</h5>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/SRW_1.jpg" class="d-block w-100" alt="Third Slide">
          <div class="carousel-caption">
            <h5 class="text-warning">SERENA WILLIAMS</h5>
            <p></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>


<?php $contenu = ob_get_clean(); ?>

<?php require 'template.php'; ?>
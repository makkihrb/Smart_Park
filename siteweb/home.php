<?php
include ('config.php');
require_once('logincontrol.php');
session_start();


?>
<!DOCTYPE HTML>
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Djerba Park</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom Colors -->
<link rel="stylesheet" href="assets/colors/red.css">
<script src="https://kit.fontawesome.com/b0e00e4a12.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>    
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

</head>
<body >

<!--Header-->
 <?php require_once "header.php"; ?> 
<!-- /Header --> 

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>Reserver en un seul clic.</h1>
            <p>Avec nos parcs de stationnement intelligents, trouver un emplacement n'a jamais été aussi facile!</p>
            <a href="listing-classic.php" class="btn">Reserver <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div> 
        </div>
      </div>
      
    </div>
  </div>
  
</section>
<!-- /Banners --> 
<!-- Filter-Form -->


<!-- About -->
<section class="about-us-section section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2>Comment <span>Ca Marche ?</span></h2>
      <h4> 1 - Trouvez votre parking ! </h4>
<p> Inscrivez-vous et choisissez le parking convenable de nos parkings </p>
 <h4> 2 - Reservez ! </h4>
 <p> Sélectionnez la date et l’heure, vérifiez la disponibilité, voir les prix... </p>
 <h4> 3 - Et garez-vous! </h4>
<p> A l’arrivée, il suffit de montrer votre réservation dans le parking.</p>
 </p>
    </div>
    
  </div>
</section>
<!-- /About --> 

<!-- les offres-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Trouver <span>les meilleures offres pour vous</span></h2>
      <p> Djerba Park vous offre la possibilité de choisir la meilleure offre pour vous en vérifiant tous ses parcs de stationnement, que ce soit contre payant ou gratuitement avant de réserver.


</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#gratuit" role="tab" data-toggle="tab">Gratuit</a></li>
          <li role="presentation"><a href="#payant" role="tab" data-toggle="tab">Payant</a></li>
        </ul>
      </div>
      <!-- PARKINGS -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="gratuit">
         <!-- PHP -->
		  <?php 
        $query="SELECT * FROM parking WHERE typ='gratuit' ORDER BY id  LIMIT 0,3";
        $result = $conn->query($query);
		
$i=0;
$id=[];
$nom=[];
$adresse=[];
$np=[];
$map=[];
       while ($row = $result->fetch_assoc()) {
		   
	$id[$i]=$row['id'];
	$nom[$i]=$row['nom'];
	$adresse[$i]=$row['adresse'];
	$np[$i]=$row['np'];
	$map[$i]=$row['map'];
	?>
   <!-- HTML -->
    
        <div class="col-list-3">
            <div class="recent-car-list">
            <div class="car-info-box"> <a><?php echo ($map[$i]); ?></a>
                
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i><?php echo htmlspecialchars($np[$i]) ; ?></li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo htmlspecialchars($adresse[$i]) ; ?></li>
                </ul>
              </div>
              <div class="car-title-m" >
                <h6><a href="nosparkings.php" ><?php echo htmlspecialchars($nom[$i]) ; ?></a></h6>
                <span class="price">0 DT</span> 
              </div>
              <div class="inventory_info_m">
	                <p><?php echo htmlspecialchars($adresse[$i]) ; ?></p>
                 </div>
            </div>
          </div>
           <!-- HTML -->
<?
          $i++;
}
          ?>
           <!-- PHP -->
        </div>
        
        <!-- PAYANT -->
        <div role="tabpanel" class="tab-pane" id="payant">
           <!-- PHP -->
		  <?php 
        $query="SELECT * FROM parking WHERE typ='payant' ORDER BY id LIMIT 0,3 ";
        $result = $conn->query($query);
		
$i=0;
$id=[];
$nom=[];
$adresse=[];
$np=[];
$map=[];
       while ($row = $result->fetch_assoc()) {
		   
	$id[$i]=$row['id'];
	$nom[$i]=$row['nom'];
	$adresse[$i]=$row['adresse'];
	$np[$i]=$row['np'];
	$map[$i]=$row['map'];
	?>
   <!-- HTML -->
    
        <div class="col-list-3">
            <div class="recent-car-list">
            <div class="car-info-box"> <a><?php echo ($map[$i]); ?></a>
                
                <ul>
                  <li><i class="fa fa-road" aria-hidden="true"></i><?php echo htmlspecialchars($np[$i]) ; ?></li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo htmlspecialchars($adresse[$i]) ; ?></li>
                </ul>
              </div>
              <div class="car-title-m" >
                <h6><a href="nosparkings.php" ><?php echo htmlspecialchars($nom[$i]) ; ?></a></h6>
                <span class="price">1 DT/Heure</span> 
              </div>
              <div class="inventory_info_m">
	                <p><?php echo htmlspecialchars($adresse[$i]) ; ?></p>
                 </div>
            </div>

          </div>
           <!-- HTML -->
<?
          $i++;
}
          ?>
           <!-- PHP -->
         
        <!-- /PAYANT --> 
        

        </div>
  
      </div>
      
    </div>
  
  </div>
  <center><a href="listing-classic" class="btn btn-xs uppercase" style=" display: table-cell; vertical-align: middle; border: 5px solid transparent; font-size:13px;  height: 50px;" >voir plus de notre parkings</a> </center>

</section>
<!-- /PARKINGS --> 

<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h3><i  aria-hidden="true"></i>Real Time</h3>
            <p>Fonctionnalités En Temps Réel. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>100+</h2>
            <p>Voiture </p> <p>Garée Chaque Jour</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-location-arrow" aria-hidden="true"></i>10+</h2>
            <p>Parking Disponibles</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-credit-card" aria-hidden="true"></i>E-pay</h2>
            <p>Paiement En Ligne et Securisé</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 

<!--Footer -->
<?php require_once "footer.php"; ?>
<!-- /Footer--> 



<!--Back to top-->
<?php require_once "icons.php"; ?>
<!--/Back to top--> 
<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
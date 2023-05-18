<?php 
session_start();
include ("config.php");

?>
<!DOCTYPE HTML>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>À propos Nous</title>
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
    <script src="https://kit.fontawesome.com/b0e00e4a12.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Custom Colors -->
<link rel="stylesheet" href="assets/colors/red.css">
<!--<link rel="stylesheet" href="assets/colors/orange.css">-->
<!--<link rel="stylesheet" href="assets/colors/blue.css">-->
<!--<link rel="stylesheet" href="assets/colors/pink.css">-->
<!--<link rel="stylesheet" href="assets/colors/green.css">-->
<!--<link rel="stylesheet" href="assets/colors/purple.css">-->
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->  
</head>
<body>
<!--Header-->


<?php
      
      if ($_SESSION['cin']  ==""){
       require ('headernc.php');
      }
      else{
      require ('header.php');
      }
 ?>

 

<!-- /Header --> 

<!--Page Header-->
<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>À propos Nous</h1>
      </div>
     
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--About-us-->
<section class="about_us section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2>Bienvenue <span>Chez Djerba Park</span></h2>
      <p>Djerba Park Houmt Souk vise à atteindre un équilibre entre la demande et l'offre de stationnement et l'utilisation de l'espace de Parking pour offrir transport idéal dans la ville  tout en maintenant le dynamisme des activités . </p>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="about_content row">
          <div class="col-md-5 col-sm-4 col-xs-4">
            <div class="about_img"> <img src="assets/images/logo2.png" alt="image"> </div>
          </div>
          <div class="col-md-7 col-sm-8 col-xs-8">
            <h3>Qui <span>Somme Nous</span></h3>
            <p>DjerbaPark le seul societé qui offre des parkings bien organisés.</p>
          </div>
      </div>   
      </div>
      <div class="clearfix"></div>
      <div class="col-md-6 col-sm-6">
        <div class="about_content row">
          <div class="col-md-5 col-sm-4 col-xs-4">
            <div class="about_img"> <img src="assets/images/job.jpg" alt="image"> </div>
          </div>
          <div class="col-md-7 col-sm-8 col-xs-8">
            <h3>Nos <span>Activités</span></h3>
            <p>offrir à peuple des parkings intelligents bien organisés pour stationner rapidement et plus de sécurité.</p>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</section>
<!-- /About-us--> 

<!-- Why-Choose-Us-->
<section class="why_choose_us section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Pourquoi <span>Nous</span></h2>
      <p>Djerba park vous offre un stationnement facile et rapide et plus sûr que les autres parkings . </p>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="listing_box">
          <h5><i class="fa fa-user-circle" aria-hidden="true"></i>confiance de nos clients </h5>
          <p>Nos Parkings sont fiable et sécurisé.</p>
        </div>
        <div class="listing_box">
          <h5><i class="fa fa-globe" aria-hidden="true"></i> Plusieurs Parkings</h5>
          <p>nos parkings sont partout à houmet  souk   .</p>
        </div>
        <div class="listing_box">
          <h5><i class="fa fa-car" aria-hidden="true"></i> stationnement facile et sécurisé</h5>
          <p>vous pouvez garer votre voiture en toute sécurité et de maniere facile .</p>
        </div>
      </div>
      
       
      </div>
    </div>
  </div>
</section>
<!-- /Why-Choose-Us--> 
<!--Footer -->
<?php require ('footer.php'); ?>
<!-- /Footer--> 


<!--Back to top-->
<?php require ('icons.php'); ?>
<!--/Back to top--> 




<?php require ('connexion.php'); ?>
<!-- Scripts --> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
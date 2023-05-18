<?php 
include "config.php";
session_start();
$lat= $_GET['lat']; //latitude
$lng= $_GET['long']; //longitude
$mycor=$lat.','.$lng;
$query="SELECT * FROM parking ORDER BY id ";
$result = $conn->query($query);

$i=0;
$id=[];
$nom=[];
$adresse=[];
$np=[];
$npd=[];
$map=[];


while ($row = $result->fetch_assoc()) {

$id[$i]=$row['id'];
$nom[$i]=$row['nom'];
$adresse[$i]=$row['adresse'];
$np[$i]=$row['np'];
$map[$i]=$row['map'];
$npd[$i]=$row['npd'];
}


?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Nos Parkings</title>
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

        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

</head>
<body>

<?php
      
      if ($_SESSION['cin']  ==""){
       require ('headernc.php');
      }
      else{
      require ('header.php');
      }
 ?>

 
  
<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Nos Parkings</h1>
      </div>
      <ul class="coustom-breadcrumb">
       
        <li>Voici nos Parkings Trié desendant de la plus proche pour Vous Maintenant , vous devez juste cliquer sur la button Itineaires pour obtenir les directions </li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 


<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
      <?php $query="SELECT * , (3956 * 2 * ASIN(SQRT( POWER(SIN(( $lat - lat) *  pi()/180 / 2), 2) +COS( $lat * pi()/180) * COS(lat * pi()/180) * POWER(SIN(( $lng - lng) * pi()/180 / 2), 2) ))) AS distance FROM parking order by distance ";
        $result = $conn->query($query);
		
$i=0;
$id=[];
$nom=[];
$adresse=[];
$np=[];
$npd=[];
$map=[];
$plat=[];
$plng=[];
$pcor=[];
$idp=1;
       while ($row = $result->fetch_assoc()) {
		   
	$id[$i]=$row['id'];
	$nom[$i]=$row['nom'];
	$adresse[$i]=$row['adresse'];
	$np[$i]=$row['np'];
	$map[$i]=$row['map'];
	$npd[$i]=$row['npd'];
    $plat[$i]=$row['lat'];
    $plng[$i]=$row['lng'];
    $pcor[$i]=$plat[$i].','.$plng[$i];
  ?>
 
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><a href="#"><?php echo ($map[$i]); ?></a>      
          </div>
          <div class="product-listing-content">
            <h5><a href="#"><?php echo htmlspecialchars($nom[$i]) ; ?></a></h5>
            <p class="list-price"><?php echo $row['typ'];?></p>
            <ul>
              <li><i class="fa fa-car" aria-hidden="true"> Places </i><?php echo htmlspecialchars($np[$i]) ; ?></li>
              <li><i class="fa fa-user" aria-hidden="true"> Places Dispo</i><?php echo htmlspecialchars($npd[$i]) ; ?></li>
              </ul>
              <ul>
              <li><i class="fa fa-calendar" aria-hidden="true"></i> 7/7 </li>
              
            </ul>
			 <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo htmlspecialchars($adresse[$i]) ; ?></span></div>

            <button id="<?php echo $id[$i]; ?>"type="button" name="Itinaire"  class="search_other" class="fa fa-ticket" style="font-size:12px;" onclick="window.open('https://www.google.com/maps/dir/?api=1&origin=<?php echo $mycor ;?>&destination=<?php echo $pcor[$i] ;?>','_blank')" > Itinéraires  <i class="fa fa-random" aria-hidden="true"></i> </button>
            
          </div>
        </div>
        <?
        $i++;
        $idp++;
}
?>
 <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.js"></script>
			<script type = "text/javascript">
        var id;
      $(document).ready(function(){
    $('input[value="Reserver"]').click(function() {
      id=this.id;
    });
});
</script>
      </div>
    </div>
  </div>
</section>
<!-- /Listing--> 

<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Autres Pages</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        <div><a href="home.php"><img src="assets/images/home.png" class="img-responsive" alt="image"></a></div>
        <div><a href="about_us.php"><img src="assets/images/aboutus.png" class="img-responsive" alt="image"></a></div>
        <div><a href="listing-classic.php"><img src="assets/images/park.png" class="img-responsive" alt="image"></a></div>
        <div><a href="contact-us.php"><img src="assets/images/phone.png" class="img-responsive" alt="image"></a></div>
        <div><a href="services.php"><img src="assets/images/services.png" class="img-responsive" alt="image"></a></div>
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 
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
<?php require('footer.php') ; ?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
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

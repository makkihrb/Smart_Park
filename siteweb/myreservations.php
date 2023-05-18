<?php 
include "config.php";
require_once('logincontrol.php');
session_start();
$sql = "SELECT * FROM Client WHERE cin='$_SESSION[cin]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    $solde = $row['balance'];
  }
$query="SELECT * FROM histo WHERE cin='$_SESSION[cin]' ORDER BY id ";
        $result = $conn->query($query);
          
        $id=[];
        $cin=[];
        $te=[];
        $ts=[];
        $mat=[];
        $idp=[];
        $nomp=[];
$j=0;
while ($row = $result->fetch_assoc()) {
		   
	$id[$j]=$row['id'];
	$cin[$j]=$row['cin'];
	$te[$j]=$row['te'];
	$ts[$j]=$row['ts'];
  $mat[$j]=$row['mat'];
	$idp[$j]=$row['idp'];
  $query2="SELECT * FROM parking WHERE id='$idp[$j]' ORDER BY id ";
  $result2 = $conn->query($query2);
  while ($row2= $result2->fetch_assoc()) {
  $nomp[$j]=$row2['nom'];
  }
  $j++;
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
<title>Mes Réservations</title>
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
<!-- Header --> 
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="./home.php" ><img src="assets/images/logo.png" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">E-MAIL D'ASSISTANCE : </p>
              <a href="mailto:info@example.com">parkdjerba@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">ASSISTANCE TÉLÉPHONIQUE:</p>
              <a href="tel:61-1234-5678-09"></a> +21628913456 || +21628913453 </div>
            
			
		
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
      <div class="header_search">
          <div id="search_toggle"><i class="fa fa-usd" aria-hidden="true"></i></div>
          <form  id="header-search-form">
            <?php if($solde>0){ ?>
<input type="hidden" id="solde" value="1" >
            <? } ?>
            <input type="text" value=" Votre Solde : <?php echo $solde ; ?> TND" class="form-control" readonly  style="color: black;">
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="./home">Home</a></li>
              <li><a href="about_us">À Propos</a></li>
              <li><a href="listing-classic">Nos Parkings</a></li>
              <li><a href="contact-us">Contactez-nous</a></li>
              <li><a href="services">Services</a></li>
          
         
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
</header>
<!-- /Header --> 
<!-- /Header --> 

<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Historique de Votre Reservation</h1>
      </div>
      
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--my-vehicles-->
<section class="user_profile inner_pages">

    <div class="row">
    <div class="col-md-3 col-sm-3">
        <div class="profile_nav">
          <ul>
            <li ><a href="profile-settings">Profil</a></li>
            <li class="active"><a>Historique De Reservation</a></li>
            
            <li><a href="logout">Déconnexion</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Mes Réservations <span style="color:gray;font-weight:bold">  ( <?php echo $j;?> Réservations)</span></h5>
          
          <div class="my_vehicles_list">
          <?php
          $i=0; 
       while($i<$j){
  ?>
          <ul class="vehicle_listing">
              <li>
                <div class="vehicle_title">
                  <h6><a >ID de Reservation:<?php echo ' '.$id[$i];?></a></h6>
                  <h8><b >Temps d'entrée:<?php echo $te[$i];?></b></h8><br>
                  <h8><b >Temps de sortie:<?php echo $ts[$i];?></b></h8><br>
                  <h8><b >Nom de Parking:<?php echo $nomp[$i];?></b></h8>
                </div>
                <div class="vehicle_status"> <b class="btn outline btn-xs active-btn">Reservée</b>
                 </div>
              </li>
              <?
        $i++;
}
?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/my-vehicles--> 
<!--Footer -->
<?php require ('footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<?php require('icons.php') ; ?>
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
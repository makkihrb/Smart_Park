<?php
include "config.php";
require_once('logincontrol.php');
$cin =$_SESSION['cin'];
$nom =$_SESSION['Nom'];
$pre =$_SESSION['pre'];
$tel =$_SESSION['tel'];
$dn =$_SESSION['dn'];
$mail =$_SESSION['mail'];
$genre =$_SESSION['genre'];
$sql = "SELECT * FROM Client WHERE cin='$cin'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    $solde = $row['balance'];
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
<title>Profil</title>
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
          <li><a href="./home.php">Home</a></li>
              <li><a href="about_us.php">À Propos</a></li>
              <li><a href="listing-classic.php">Nos Parkings</a></li>
              <li><a href="contact-us.php">Contactez-nous</a></li>
              <li><a href="services.php">Services</a></li>
          
         
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
</header>
<!-- /Header --> 

<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Votre Profil</h1>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Profile-setting-->
<section class="user_profile inner_pages">
  <div class="container">
    
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <div class="profile_nav">
          <ul>
            <li class="active"><a href="profile-settings.php">Profil</a></li>
            <li><a href="myreservations.php">Historique De Reservation</a></li>
            
            <li><a href="logout.php">Déconnexion</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Paramètres Généraux</h5>
          <form action="update.php" method="post">
		  
      <div class="form-group">
        <div class="control-label">
            <?php echo $_SESSION[message]; ?>    
        </div>
         </div>
              <label class="control-label">CIN(ne peut pas changer ce champ)</label>
              <input type="text" value="<?php echo htmlspecialchars($cin);?>" class="form-control white_bg"  name="cin" id="cin" required>
            </div>
            <div class="form-group">
              <label class="control-label">Nom</label>
              <input value="<?php echo htmlspecialchars($nom);?>" class="form-control white_bg" name="nom"id="nom" type="text" required>
            </div>
            <div class="form-group">
              <label class="control-label">Prenom</label>
              <input value="<?php echo htmlspecialchars($pre);?>" class="form-control white_bg" name="pre"id="pre" type="text" required>
            </div>
            <div class="form-group">
              <label class="control-label">Email</label>
              <input value="<?php echo htmlspecialchars($mail);?>" class="form-control white_bg" name="mail" id="mail" type="email" required>
            </div>
            <div class="form-group">
              <label class="control-label">Numero de Telephone</label>
              <input value="<?php echo htmlspecialchars($tel);?>" class="form-control white_bg" name="tel" id="tel" type="text" required>
            </div>
            <div class="form-group">
              <label class="control-label">Date de Naissance</label>
              <input value="<?php echo htmlspecialchars($dn);?>" class="form-control white_bg" name="dn" id="dn" type="date" required>
            </div>
            <div class="form-group">
              <label class="control-label">Genre : </label>
              <label for="male" class="radio-inline"><input type="radio" name="genre" value="H" id="male" <?php echo ($genre== 'H') ?  "checked" : "" ; ?> required />Homme</label>
                  <label for="female" class="radio-inline"><input type="radio" name="genre" value="F" id="female" <?php echo ($genre== 'F') ?  "checked" : "" ;  ?> required />Femme</label>
            </div>
            
            <div class="gray-bg field-title">
              <h6>Confirmer Avec Votre Mot de Passe</h6>
            </div>
            <div class="form-group">
              <label class="control-label">Mot de Passe</label>
              <input class="form-control white_bg"  id="password" type="password" name="pwd" required>
            </div>
            <div class="form-group">
              <label class="control-label">Confirmer Votre Mot de Passe</label>
              <input class="form-control white_bg" id="c-password" type="password" name="pwd" required>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" id="submit" class="btn">Sauvegarder Les Modifications <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
         <?php session_start(); $_SESSION[message]=''; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Profile-setting--> 
<footer>
  
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
            <p>Telecharger Notre Applications:</p>
            <ul>
              <li class="apk"><a href="./coming-soon"><i class="fa fa-android" aria-hidden="true"></i></a></li>
              <li class="ios"><a href="./coming-soon"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="footer_widget">
            <p>Contactez-Nous Avec:</p>
            <ul>
              <li class="fb"><a href="https://www.facebook.com/Djerba-Park-100811761304145/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">Copyright &copy; 2022 DjerbaPark</p>
        </div>
      </div>
    </div>
  </div>
</footer>
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

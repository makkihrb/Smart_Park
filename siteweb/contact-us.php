<?php include ('config.php');
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
<title>Contact</title>
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

<?php
      
      if ($_SESSION['cin']  ==""){
       require ('headernc.php');
      }
      else{
      require ('header.php');
      }
 ?>

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Contactez-nous</h1>
      </div>
    
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Contact-us-->
<section class="contact_us section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-6">
        <h3>Contactez-nous en remplissant le formulaire ci-dessous.</h3>
        <div class="contact_form gray-bg">
          <form action="mail.php" method="post">
          <?php echo ($_SESSION[contact]); ?>   
            <div class="form-group">
              <label class="control-label">Votre Nom et Prenom <span>*</span></label>
              <input id="nom" name="nom" value="<?php echo htmlspecialchars($_SESSION['Nom'].' '.$_SESSION['pre']);?>" type="text" class="form-control white_bg" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Adresse Email<span>*</span></label>
              <input id="mail" name="mail" value="<?php echo htmlspecialchars($_SESSION['mail']);?>" type="email" class="form-control white_bg"  required>
            </div>
            <div class="form-group">
              <label class="control-label">Numero de Telephone<span>*</span></label>
              <input id="tel" name="tel" value="<?php echo htmlspecialchars($_SESSION['tel']);?>" type="text" class="form-control white_bg" required>
            </div>
            <div class="form-group">
              <label class="control-label">Message <span>*</span></label>
              <textarea id="msg" name="msg" class="form-control white_bg" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit">Envoyer <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Nos Coordonnées </h3>
        <div class="contact_detail">
          <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="contact_info_m">Rue municipale Houmet Souk,Djerba, Tunisia</div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="tel:61-1234-567-90">+21628913456 || +21628913453</a></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="mailto:contact@exampleurl.com">parkdjerba@gmail.com</a></div>
            </li>
          </ul>
          <div class="map_wrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5599.26746047059!2d10.853802937871878!3d33.8777559591741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13aaa4e858b552ef%3A0xb3ee7cc8fa3692d7!2sHoumt%20Souk!5e0!3m2!1sen!2stn!4v1645667541447!5m2!1sen!2stn" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>

<!-- /Contact-us--> 
<?php $_SESSION[contact]=''; ?>  
<!--Footer -->
<?php require ('footer.php'); ?>
<!-- /Footer--> 


<!--Back to top-->
<?php require('icons.php') ; ?>
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
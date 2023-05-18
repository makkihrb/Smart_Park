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
<title>Services</title>
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
<section class="page-header services_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Nos Services</h1>
      </div>
      
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Our-Services-->
<section id="services" class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2>Djerba Park <span> Services</span></h2>
      <p>Djerba Park offre de nombreux services pour vous afin que vous profitiez de la meilleure expérience . </p>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="services_image"> <img src="assets/images/S1.jpg" alt="image">
          
        </div>
      </div>
      <div class="col-md-6">
        <h3>Parking  <span> plus securisé et simple que jamais </span></h3>
        <p> Reserver votre place dans un de nos parkings selon votre choix puis accéder à ce dernier et grace au code QR obtenu après la réservation vous pouvez  accéder à votre emplacement sans aucun problème  </p>
        <br>
        <h4>Une simplicité et une rapidité d'utilisation pour une expérience d'accès au parking inédite</h4>
        <ul class="list_style_none">
          <li><i class="fa fa-check" aria-hidden="true"></i> Seules les voitures autorisées y ont accès </li>
          <li><i class="fa fa-check" aria-hidden="true"></i> Garez Votre Véhicule en toute sécurité </li>
		  <li><i class="fa fa-check" aria-hidden="true"></i> L'opération ne prendra que quelques secondes. </li>
		
        
        </ul>
      </div>
    </div>
    <div class="space-80"></div>
    <div class="row">
      <div class="col-md-6 col-md-push-6">
        <div class="services_image"> <img src="assets/images/S2.png" alt="image">
          
        </div>
      </div>
      <div class="col-md-6 col-md-pull-6">
        <h3>Rechercher, suivre et réserver <span> !</span></h3>
        <p>Depuis votre smartphone, vous pouvez connaître les emplacements disponibles et réserver une place peu importe où vous êtes et à quel moment.</p>
        <br>
        <h4></h4>
        <ul class="list_style_none">
          <li><i class="fa fa-check" aria-hidden="true"></i> Recherche precis  </li>
          <li><i class="fa fa-check" aria-hidden="true"></i> Suivre en temps reel</li>
          <li><i class="fa fa-check" aria-hidden="true"></i> Reservation facile</li>
        </ul>
      </div>
    </div>
    <div class="space-80"></div>
    <div class="row">
      <div class="col-md-6">
        <div class="services_image"> <img src="assets/images/S3.png" alt="image">
          
        </div>
      </div>
      <div class="col-md-6">
        <h3>Sécurisé  <span>, Facile et Immédiat   </span></h3>
        <p>Rendez-vous au parking le plus proche pour vous, précisez le montant à recharger et votre numéro CIN et c’est tout !</p>
        <br>
        <h4>Reserver et ePayez vos Reservations avec DjerbaPark ! </h4>
        <ul class="list_style_none">
          <li><i class="fa fa-check" aria-hidden="true"></i> Service Disponible 24H/24H, 7j/7j </li>
          <li><i class="fa fa-check" aria-hidden="true"></i> Securisé et Facile. </li>
		  <li><i class="fa fa-check" aria-hidden="true"></i> L'opération Ne Prendra Que Quelques Secondes. </li>
		
        
        </ul>
      </div>
    </div>

  </div>
</section>
<!-- /Our-Services--> 


<!--Footer -->
<?php require('footer.php'); ?>
<!-- /Footer--> 


<!--Back to top-->
<?php require('icons.php') ; ?>
<!--/Back to top--> 




<!--Login-Form -->
<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Connecter</h3>
      </div>
      <div class="modal-body">
        
          <div class="login_wrap">
            <div class="col-md-6 col-sm-6">
               <form action="login.php" method="post" >
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Adresse Email" id="mail" name="mail" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Mot de Passe" id="pwd" name="pwd"required>
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="remember">
                  <label for="remember">Se souvenir de moi</label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Login" class="btn btn-block" id="signin" name="signin">
                </div>
              </form>
              
            </div>
      </div>
      <div class="modal-footer text-center">
        <p>Don't have an account? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Inscrivez-vous ici</a></p>
        <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Mot de Passe Oublié</a></p>
      </div>
    
  </div>
</div>
</div>
</div>
<!--/Login-Form --> 
<?php session_start(); $_SESSION[login]=''; ?>

<!--Register-Form -->
<div class="modal fade" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Inscription</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-6 col-sm-6">
              <form action="connect.php" method="post" id="conform">
			  <div class="form-group">
                  <input type="number" class="form-control" placeholder="Numero de Votre CIN" name="cin" id="cin" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nom" name="nom" id="nom" required >
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Prenom" name="pre" id="pre" required >
                </div>
				 <div class="form-group">
                <label for="gender">Genre : </label>
                  <label for="male" class="radio-inline"><input type="radio" name="genre" value="H" id="male" required />Homme</label>
                  <label for="female" class="radio-inline"><input type="radio" name="genre" value="F" id="female" required />Femme</label>
				</div>
				<div class="form-group">
                  <label for="dn">Date de Naissance :</label>
                  <input type="date" name="dn" id="dn" class="form-control" aria-label="date" required>
                </div>
		        <div class="form-group">
                  <input type="number" class="form-control" placeholder="Numero de Telephone" name="tel" id="tel" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placehoder="Adresse Email" name="mail" id="mail" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Mot de Passe" name="pwd_name" id="pwd_id" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Confirmer votre Mot de Passe" name="con" id="con" required>
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required >
                  <label for="terms_agree">J'accepte <a href="#">Les Conditions</a></label>
                </div>

                <div class="form-group">
                  <input type="submit" value="Inscrivez-vous" class="btn btn-block" name="submit" id="submit" >
                </div>
              </form>
            </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Vous avez déjà un compte ? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Connexion</a></p>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
              var date = new Date();
date.setFullYear(date.getFullYear() - 18);
         $('#dn').attr('max', date.toISOString().split('T')[0]);
               $('#conform').validate({
                   rules: {
                      cin: {
                           required: true,
                           minlength: 8
                       },
                       nom: {
                           required: true,
                           minlength: 5
                       },
                       pre: {
                           required: true,
                           minlength: 5
                       },
                       tel: {
                           required: true,
                           minlength: 8,
                           maxlength: 12
                       },
                       
                       
                       mail: {
                           required: true
                       },
                       
                       pwd_name: {
                           required:true,
                           minlength : 5,
                           pwcheck : true
                       },
                       con:{
                        required:true,
                        equalTo : ('#pwd_id')
                       }
                   },
                   messages: {
                      nom :"Veuillez fournir un nom valide",
                      pre :"Veuillez fournir un prénom valide",
                      mail:"mail incorrect ou vide",
                      tel :"Veuillez saisir un numéro téléphone valide",
                      cin :"Veuillez saisir un numéro cin valide",
                      pwd :"Veuillez fournir un Mot de Passe Plus Sécurisé",
                      con :"Veuillez confirmer Votre Mot de Passe"
                      
                   }           
        
               });
               
               $.validator.addMethod("pwcheck", function(value) {
               return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) 
              && /[a-z]/.test(value) 
              && /\d/.test(value) 
});

            });
        </script>
<!--/Register-Form -->  
<?php session_start(); $_SESSION[register]=''; ?>

<!--Forgot-password-Form -->
<div class="modal fade" id="forgotpassword">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Mot de Passe Oublié ?</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="forgotpassword_wrap">
            <div class="col-md-12">
              <form action="forget.php" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Votre Adresse Email" name="fmail" id="fmail"required >
                </div>
                <div class="form-group">
                  <input type="submit" value="Réinitialiser Mon Mot de Passe" class="btn btn-block" name="fgt" id="fgt">
                </div>
              </form>
              <div class="text-center">
                <p><a href="#loginform" data-toggle="modal" data-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Retour à la connexion</a></p>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>
</div>
<!--/Forgot-password-Form --> 

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
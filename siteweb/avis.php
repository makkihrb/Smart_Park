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
        <h1>Avis et Commentaires</h1>
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
        <div class="contact_form gray-bg">
          <form action="comm.php" method="post">
          <?php echo ($_SESSION[avis]); ?>   
            <div class="form-group">
            <h4 style="margin-bottom : 10px;">Votre Commentaire </h4>
              <label class="control-label">Votre Nom et Prenom <span>*</span></label>
              <input id="nom" name="nom" value="<?php echo htmlspecialchars($_SESSION['Nom'].' '.$_SESSION['pre']);?>" type="text" class="form-control white_bg" required>
            </div>
            <div class="form-group">
              <label class="control-label">Votre Commentaire <span>*</span></label>
              <textarea id="msg" name="msg" class="form-control white_bg" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit">Publier <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
      <?php $query="SELECT * FROM avis ORDER BY id "; 
        $result = $conn->query($query);
       ?> <h3>Autres Commentaires </h3><?
        while ($row = $result->fetch_assoc()) {
          $cin=$row['cin'];
          $sql = "SELECT * FROM Client WHERE cin='$cin'";
          $result1 = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result1) === 1) {
              $row1 = mysqli_fetch_assoc($result1);
          ?>
        
        <div class="contact_detail">
          <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-user" aria-hidden="true"></i></div>
              <div class="contact_info_m"><?php echo htmlspecialchars($row1['Nom'].' '.$row1['pre']);?></div>
            </li>
            <li>
              <div class="contact_info_m"><b><?php echo htmlspecialchars($row['comm']);?></b></div>
            </li>
            <li>
              <div class="contact_info_m"><a href=""><?php echo htmlspecialchars($row['likes']);?></a></div>
            </li>
          </ul>
        </div>
          <? }}?>
    </div>
    </div>
  </div>
  
</section>

<!-- /Contact-us--> 
<?php $_SESSION[avis]=''; ?>  
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
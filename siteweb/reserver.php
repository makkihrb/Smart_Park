<?php
require ('config.php');
require_once ('phpqrcode/qrlib.php');
session_start();
$te=$_POST['te'];
$ts=$_POST['ts'];
  $tee = strtotime($te);
  $tss = strtotime($ts);
  $td=round(($tss-$tee)/3600);
  $pre = $_POST['prefix'];
	$post=$_POST['postfix'];
	$mat=$pre.$post;
  $path = 'assets/images/qr/';
  $file = $path.uniqid().".png";

$cin=$_SESSION['cin'];
$i=$_SESSION['i'];
$idp=$_POST['pid'];
$sql = "INSERT INTO reservation(cin,te,ts,mat,idp) values( ?, ?, ?, ?, ?)";
        $insert= $conn->prepare($sql); 
        $insert->bind_param('sssss', $cin, $te, $ts, $mat, $idp);
    if($insert->execute()){
           $sql2 = "INSERT INTO histo(cin,te,ts,mat,idp) values('$cin', '$te', '$ts', '$mat','$idp')";
  $result=mysqli_query($conn,$sql2);
  $update = "UPDATE Client SET balance=balance-$td WHERE cin='$cin'";
  if ($conn->query($update) === TRUE) {
	$update1 = "UPDATE parking SET npd=npd-1 WHERE id='$idp'";
           if ($conn->query($update1) === TRUE) {
           
            echo '<div  style="height: 40px;" class="alert alert-success">Votre Reservation terminé avec succées </div> ';
           
           }
          }
  $query = "SELECT id FROM reservation WHERE mat = '$mat' AND te = '$te' AND ts = '$ts'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
         
          $_SESSION['qr']=$row['id'];
          $text=$_SESSION['qr'];
        }

    }
         else{
          echo 'Error: '.$conn->error;
         }
		 ?>
		 
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
  
		 QRcode::png($text,$file,'L',10,2);
         echo"<center><img src='".$file."'><center>"; ?>
 
 <a class="btn btn-primary" href="download.php?file=<?php echo $file; ?>">Telecharger QR Code</a>;
 <?php echo $btn ; ?>
 
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
 
 <!--Footer -->
<?php require_once "footer.php"; ?>
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


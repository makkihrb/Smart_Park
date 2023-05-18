<?php 
session_start();
require "config.php";
if(isset($_SESSION["adname"]) ){
    header("location:admin/panel.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
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

		<title>Admin Login</title>
	</head>
    <style>
        body {
    background-image: url(assets/images/admin.jpg);
    background-size: cover;
}
    </style>
    <body>
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-30 p-b-50">
				<form class="login100-form validate-form p-b-33 p-t-5" id="adminfrm"  method="post">

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" id="adname" name="adname" placeholder="Username" required>
						<span class="focus-input100" ></span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" id="adpass" name="adpass" placeholder="Mot de Passe" required>
						<span class="focus-input100" ></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<input type="submit" id="login" name="login" class="login100-form-btn" value="login">
							

					</div>

				</form>
			</div>
		</div>
	</div>
<?php

if(isset($_POST['login']))
{
$query="SELECT * FROM admin_login WHERE adname='$_POST[adname]' AND adpass='$_POST[adpass]'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1)
{
  session_start();
  $_SESSION['adname']=$_POST['adname'];
  $_SESSION['adpass']=$_POST['adpass'];
  header('Location: admin/panel.php');
}
else
{
  echo "<script>alert('merci de verifier Username et Mot de Passe');</script>";
}



}





?>

        </body>
</html>


<?php
include "config.php";
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
session_start ();
$_SESSION[contact];
    $message = $_POST['msg'];
    $to = 'parkdjerba@gmail.com';

     $from = $_POST['mail'];
     if(isset($_SESSION['cin'])){
     $subject = "Message d'un client de cin ".' '.$_SESSION['cin'];
     }
     else{
        $subject = "Message d'un visiteur ";
     }
     $message = $_POST['msg'];
     $headers ='From '.$from;
     mail($to,$subject,$message,$headers);
	 $_SESSION[contact]='<div class="alert alert-success">votre message est envoyée avec succées. nous vous répondrons bientôt     </div>';
	 header('Location : contact-us.php');

    exit();
	

 ?>
 


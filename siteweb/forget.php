<?php
session_start();
include "config.php";
$to = $_POST["fmail"];
$_SESSION[forget];

if(isset($_POST["fgt"]))
{
 $result = $conn->query("SELECT * FROM Client WHERE mail = '$to' ");
 $row_cnt = $result->num_rows;
 $row = mysqli_fetch_assoc($result);
 $pwd=$row['pwd'];
    if($row_cnt <= 0){
   $_SESSION[forget] ='<div class="alert alert-danger">il semble que vous n avez pas un compte ? <a href="#signupform" data-toggle="modal" data-dismiss="modal">inscrivez-vous</a></div>';
   header("Location: index");
 }
 else
 {
     $from = "parkdjerba@gmail.com";
     $subject = ' Recuperation du mot de passe ';
     $message = 'Bonjour ! Voici Votre Mot De Passe: '.$pwd;

     mail($to, $subject, $message);
	  $_SESSION[forget] ='<div class="alert alert-success">E-mail envoyé s il vous plaît vérifier votre courriel </div>';
	  header("Location: index");

    exit();
	 
 }
}
 ?>
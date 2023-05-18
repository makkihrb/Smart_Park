<?php
include "config.php";
session_start ();
$_SESSION[avis];
    $comm = $_POST['msg'];
        $cin=$_SESSION['cin'];
     $sql = "INSERT INTO avis(comm,cin) VALUES ('$comm','$cin')";
     if ($conn->query($sql) === TRUE){
        $_SESSION[avis]='<div class="alert alert-success">votre commentaire est publieé avec succées.   </div>';
        header('Location : avis');
       }
       else {
         echo "Error: " . $sql . "<br>" . $conn->error;
       }
    exit();
	

 ?>
 


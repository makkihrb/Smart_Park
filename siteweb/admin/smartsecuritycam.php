<?php 
session_start();
require "../config.php";
if( !isset($_SESSION["adname"]) ){
    header("location:../../adm.php");
    exit();
}
$idp=intval($_GET['id']);
$sql = "UPDATE parking SET res='disallow' where id=$idp";
    $result=mysqli_query($conn,$sql);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Detection de vehicule</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jason Mayes">

    <!-- Import the webpage's stylesheet -->
    <link rel="stylesheet" href="css/smartsecuritycam.css">
  </head>  
  <body>
    <h1>Bienvenue à notre Parking.</h1>
    

      <h2>Veuillez patienter quelques secondes.</h2>
      
      <div id="liveView" class="videoView">
        <button id="webcamButton">Activer Camera</button>
        <video id="webcam" autoplay></video>
      </div>
   
    
    
    <!-- Import TensorFlow.js library -->
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@3.11.0/dist/tf.min.js" type="text/javascript"></script>
    
    <!-- Load the coco-ssd model to use to recognize things in images -->
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"></script>
    
    <!-- Import the page's JavaScript to do some stuff -->
    <script src="scripts/smartsecuritycam.js"></script>
  </body>
</html>
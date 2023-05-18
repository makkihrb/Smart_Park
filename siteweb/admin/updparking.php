<?php
session_start();
require('../config.php');
$id=$_SESSION['eid'];
$nom = mysqli_real_escape_string($conn, $_POST['nom']);
$np = mysqli_real_escape_string($conn, $_POST['np']);
$npd = mysqli_real_escape_string($conn, $_POST['npd']);
$adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
$map = mysqli_real_escape_string($conn, $_POST['map']);
$typ = mysqli_real_escape_string($conn, $_POST['typ']);
$_SESSION[edit]=
$sql = "UPDATE parking SET nom='$nom' , np='$np', adresse='$adresse', npd='$npd', typ='$typ',map='$map'WHERE id='$id'";
if(mysqli_query($conn, $sql)){
    echo "Parking modifié avec succées pour parking : ".$nom;
}  else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
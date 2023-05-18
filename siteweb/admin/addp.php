<?php 
session_start();
require('../config.php');
$nom = mysqli_real_escape_string($conn, $_POST['nom']);
$np = mysqli_real_escape_string($conn, $_POST['np']);
$npd = mysqli_real_escape_string($conn, $_POST['np']);
$adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
$map = mysqli_real_escape_string($conn, $_POST['map']);
$typ = mysqli_real_escape_string($conn, $_POST['typ']);

$sql = "INSERT INTO parking(nom, np, adresse, npd, typ,map) values('$nom','$np','$adresse','$npd','$typ','$map')";
if(mysqli_query($conn, $sql)){
    echo "Ajout de Parking terminé avec succées.".$nom;
} 

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
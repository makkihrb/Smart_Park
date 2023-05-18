<?php 
require "../../config.php";
session_start();
$nvs=intval($_GET['nvs']);
$i=intval($_GET['id']);
$update1 = "UPDATE parking SET npd=np-$nvs WHERE id='$i'";
           if ($conn->query($update1) === TRUE) {
           echo("ss");  
           }
?>
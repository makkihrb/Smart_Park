<?php 
session_start();
require('../../config.php');
$qr = $_GET['qr'];
$result = mysqli_query($conn, "SELECT MAX(id) FROM reservation");
$row = mysqli_fetch_array($result);
// echo $row[0];  stocke le dernier id de la table reservation 
$linkid = (isset($_GET["qr"])) ? $_GET["qr"] : $row[0]; // si il ya pas de ?qr= dans notre url , on prend le dernier id ajouté comme parametre par defaut
//tester par : https://djerba-park.com/admin/checkqr/checkqr


  $result = mysqli_query($conn,"SELECT * FROM reservation WHERE id='$linkid'");
  $row = mysqli_fetch_array($result);
  if (mysqli_num_rows($result)==0) 
  {
    echo("disallow");
header('Refresh: 10; URL=https://djerba-park.com/admin/smartsecuritycam');
  }
  else {
    $idp=$row['idp'];
    echo("allow");
    $sql2 = "UPDATE parking SET res='allow' where id=$idp";
    $result=mysqli_query($conn,$sql2);
    header('Refresh: 10; URL=https://djerba-park.com/admin/smartsecuritycam?id='.$idp);
    }
   
?>
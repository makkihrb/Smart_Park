<?php 
include "../config.php";
date_default_timezone_set('Africa/Tunis');
$temps=date('Y-m-d H:i:sa');
$i=1;
mysqli_query($conn,"DELETE * FROM reservation WHERE ts <= '$temps'");

$count = "SELECT COUNT(*) as id FROM parking";
$result = $conn->query($count);
$row = mysqli_fetch_assoc($result);

while ($i<$row['id']){
$count = "SELECT COUNT(*) as idp FROM reservation WHERE idp='$i'";
$result = $conn->query($count);
$row = mysqli_fetch_assoc($result);
$npd=$row['idp'];
mysqli_query($conn,"UPDATE parking SET npd=np-'$npd' WHERE id='$i'");
$i++;
}
$conn->close();
?>
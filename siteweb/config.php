<?php
$dbHost = 'djerbanuser.mysql.db';
$dbBase = 'djerbanuser';
$dbUser = 'djerbanuser';
$dbPassword = 'RT125gt12';
$i=1;
// Database connection
	$conn  = new mysqli($dbHost,$dbBase,$dbPassword,$dbUser);
		if ( mysqli_connect_errno( $mysqli ) ) {
	echo "Échec connexion mysqli_connect : " . mysqli_connect_error() . "<br>\n";
    } 
	date_default_timezone_set('Africa/Tunis');
	$temps=date('Y-m-d H:i:sa');
	$sql = "DELETE FROM reservation WHERE ts <= '$temps'";

$count = "SELECT COUNT(*) as id FROM parking";
$result = $conn->query($count);
$row = mysqli_fetch_assoc($result);
$np=$row['id'];

while ($i<=$np) {
$count = "SELECT COUNT(*) as idp FROM reservation WHERE idp='$i'";
$result = $conn->query($count);
$row = mysqli_fetch_assoc($result);
$npd=$row['idp'];
$count = "UPDATE parking SET npd=np-'$npd' WHERE id='$i' AND typ='payant'";
$result = $conn->query($count);
$row = mysqli_fetch_assoc($result);
$i++;
}
		
	$conn->query($sql);


	?>
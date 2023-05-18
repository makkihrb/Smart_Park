<?php
session_start(); 
$dbHost = 'djerbanuser.mysql.db';
$dbBase = 'djerbanuser';
$dbUser = 'djerbanuser';
$dbPassword = 'RT125gt12';
$_SESSION[message]='';
	$cin = $_POST['cin'];
    $Nom = $_POST['nom'];
    $pre = $_POST['pre'];
    $genre = $_POST['genre'];
    $date = $_POST['dn'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    
	$conn  = new mysqli($dbHost,$dbBase,$dbPassword,$dbUser);
		if ( mysqli_connect_errno( $mysqli ) ) {
	echo "Échec connexion mysqli_connect : " . mysqli_connect_error() . "<br>\n";
    } 
	else { 
	$sql = "UPDATE Client SET cin=?, Nom=?, pre=?, genre=?, dn=?, tel=?, mail=?, pwd=? WHERE cin=?";
        $insert= $conn->prepare($sql); 
        $insert->bind_param('sssssssss', $cin, $Nom, $pre, $genre, $date, $tel, $mail, $pwd,$cin);

       
         if($insert->execute()){
           
         
         $query = "SELECT * FROM Client WHERE cin='$cin'";

         $result = mysqli_query($conn, $query);
 
         if (mysqli_num_rows($result) === 1) {
 
             $row = mysqli_fetch_assoc($result);
 
             if ($row['cin'] === $cin){
                 $_SESSION['mail'] = $row['mail'];
                 $_SESSION['pwd'] = $row['pwd'];
                 $_SESSION['Nom'] = $row['Nom'];
                 $_SESSION['pre'] = $row['pre'];
                 $_SESSION['genre'] = $row['genre'];
                 $_SESSION['tel'] = $row['tel'];
                 $_SESSION['dn'] = $row['dn'];
                 $_SESSION['cin'] = $row['cin'];
                 $_SESSION[message]='<div class="alert alert-success">vos données ont été mises à jour. </div>';;
         
 
             }}
             header('Location: profile-settings.php');
          }
         else{
          echo 'Error: '.$conn->error;
         }
        
		}
	
?>
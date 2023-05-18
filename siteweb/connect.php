<?php
$dbHost = 'djerbanuser.mysql.db';
$dbBase = 'djerbanuser';
$dbUser = 'djerbanuser';
$dbPassword = 'RT125gt12';

	$cin = $_POST['cin'];
    $Nom = $_POST['nom'];
    $pre = $_POST['pre'];
    $genre = $_POST['genre'];
    $date = $_POST['dn'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd_name'];
    session_start();
    $_SESSION[register];
	// Database connection
	$conn  = new mysqli($dbHost,$dbBase,$dbPassword,$dbUser);
		if ( mysqli_connect_errno( $mysqli ) ) {
	echo "Échec connexion mysqli_connect : " . mysqli_connect_error() . "<br>\n";
    } 
	else { 
        
	$sql = "INSERT INTO Client(cin, Nom, pre, genre, dn, tel, mail, pwd) values(?, ?, ?, ?, ?, ?, ?, ?)";
        $insert= $conn->prepare($sql); 
        $insert->bind_param('ssssssss', $cin, $Nom, $pre, $genre, $date, $tel, $mail, $pwd);
         if($insert->execute()){
            $_SESSION[register]='<div class="alert alert-success">Bienvenue Vous etes inscrit avec nous vous pouvez<a href="#loginform" data-toggle="modal" data-dismiss="modal">Connecter</a>. </div>';
         header("Location :index.php?registred");
          }
         else{
            $_SESSION[register]='<div class="alert alert-danger">il semble que vous avez un compte ? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Connectez-Vous</a></div>';
            header("Location :index.php?failed");
          
         }
        
		}
	
?>
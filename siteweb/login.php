<?php 
session_start();
include "config.php";
$_SESSION[login];
if (isset($_POST['mail']) && isset($_POST['pwd'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['mail']);

    $pass = validate($_POST['pwd']);

    if (empty($uname)) {

        header("Location: index?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM Client WHERE mail='$uname' AND pwd='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['mail'] === $uname && $row['pwd'] === $pass) {
               session_start();
                $_SESSION['mail'] = $row['mail'];

                $_SESSION['Nom'] = $row['Nom'];
                $_SESSION['pre'] = $row['pre'];
                $_SESSION['genre'] = $row['genre'];
                $_SESSION['tel'] = $row['tel'];
                $_SESSION['dn'] = $row['dn'];
                $_SESSION['cin'] = $row['cin'];
                $_SESSION['balance'] = $row['balance'];
                $cin =$row['cin'];
				$mail=$row['mail'];
                $_SESSION['mail']=$mail;
                header('Location: home');

                exit();

            }else{

                echo " Le compte est inconnu, le mot de passe ou le courriel n'est pas valide. 
				Vous serez redirigé à la page d'accueil dans quelques secondes, 
				s'il vous plaît <a href='index'>cliquer ici </a> si votre navigateur ne vous redirige pas.";

                exit();

            }

        }else{

            $_SESSION[login]='<div class="alert alert-danger">vos données est incorrect. </div>';
              header('Location:index?loginform=error'); 
			  exit();

        }

    }

}
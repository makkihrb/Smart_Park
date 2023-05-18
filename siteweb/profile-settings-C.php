<?php
session_start(); 

include "config.php";
$cin =$_SESSION['cin'];
header("Location:profile-settings?client=$cin");
            ?>

<?php 
session_start();
require('../config.php');
$id = $_GET['id'];
$sql = "DELETE FROM parking WHERE id='$id'";
$_SESSION[del]='';
if ($conn->query($sql) === TRUE) {
  header('Location: form.php');
  $_SESSION[del]='<div  style="height: 40px;" class="alert alert-success">Parking Supprimé avec succées </div>';
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
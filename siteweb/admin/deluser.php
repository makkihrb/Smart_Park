<?php 
session_start();
require('../config.php');
$cin = $_GET['cin'];
$sql = "DELETE FROM Client WHERE cin='$cin'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
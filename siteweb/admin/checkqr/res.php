<?php 
session_start();
require "../../config.php";
$idp=intval($_GET['id']);
$count = "SELECT res from parking where id=$idp";
$result = $conn->query($count);
$row = $result->fetch_assoc();
echo $row['res'];

?>
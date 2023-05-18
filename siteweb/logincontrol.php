<?php

     header("Cache-Control: private, must-revalidate, max-age=0");
     header("Pragma: no-cache");
     header("Expires: Fri, 4 Jun 2010 12:00:00 GMT");
	 session_start();
	 
	 if (!isset($_SESSION['mail'])) {
    header('Location:index');
    exit();
} 

	 ?>
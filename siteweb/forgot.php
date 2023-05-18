<?php

session_start();
include('config.php');
$message = '';

if(isset($_POST["md"]))
{
 $query = "
 SELECT * FROM Client 
 WHERE mail = :mail
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':mail' => $_POST['mail']
  )
 );
 $no_of_row = $statement->rowCount();
 if($no_of_row > 0)
 {
  $message = '<label class="text-danger">Email Already Exits</label>';
 }
 else
 {

  $result = $statement->fetchAll();
  if(isset($result))
  {
  
   $mail_body = "
   <p>Hi ".$_POST['mail'].",</p>
   <p>Thanks for Registration. Your password is This password will work only after your email verification.</p>
   ";
   require 'class/class.phpmailer.php';
   $mail = new PHPMailer;
   $mail->IsSMTP();        //Sets Mailer to send message using SMTP
   $mail->Host = 'smtpout.secureserver.net';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
   $mail->Port = '80';        //Sets the default SMTP server port
   $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
   $mail->Username = 'xxxxxxxx';     //Sets SMTP username
   $mail->Password = 'xxxxxxxx';     //Sets SMTP password
   $mail->SMTPSecure = '';       //Sets connection prefix. Options are "", "ssl" or "tls"
   $mail->From = 'parkdjerba@gmail.com';   //Sets the From email address for the message
   $mail->FromName = 'DjerbaPark';     //Sets the From name of the message
   $mail->AddAddress($_POST['mail'];  //Adds a "To" address   
   $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
   $mail->IsHTML(true);       //Sets message type to HTML    
   $mail->Subject = 'Votre Mot de Passe';   //Sets the Subject of the message
   $mail->Body = $mail_body;       //An HTML or plain text message body
   if($mail->Send())        //Send an Email. Return true on success or false on error
   {
    $message = '<label class="text-success">Votre Mot de Passe envoyée à email.</label>';
   }
  }
 }
}

?>
<?php
session_start();
require "../../config.php";
if( !isset($_SESSION["adname"]) ){
    header("location:../../adm.php");
    exit();
}
?>
<html>
<head>
<script src="https://unpkg.com/html5-qrcode"></script>
<head>
<style>
  .row{
    display:flex;
  }
  body {
zoom: 140%;
}
</style>
<body>
<div class="row">
  <div class="col">
    <div style="width:700px;" id="reader"></div>
  </div>

</div>
<script type="text/javascript">
function onScanSuccess(qrCodeMessage) {

    window.location.href = 'checkqr.php?qr='+qrCodeMessage;
}
function onScanError(errorMessage) {
   //Gestion des Erreurs
}
var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);
html5QrCode.start({ facingMode: "environment" }, config, qrCodeSuccessCallback); //back camera par defaut , si ne existe pas on utilisera rear cam
</script>
</body>
</html>
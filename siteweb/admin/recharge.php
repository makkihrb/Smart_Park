<?php
session_start();
require "../config.php";
if( !isset($_SESSION["adname"]) ){
    header("location:../adm.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('header.php'); ?>
</head>
<body>
<?php include ('widnav.php'); ?>
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Rechargez et Consulter votre Compte </h3>
							</div>
                            <label for="cin">Entrez le numéro CIN du propriétaire du compte :</label>

                         <input type="number" name="cin" id="cin" onKeyPress="if(this.value.length==8) return false;" >
                         <label for="montant">Entrez le montant a recharger :</label>
                         <input type="number" name="mnt" id="mnt" min="1" max="9999999"  oninput="validity.valid||(value='');"><br>
                         <input type="button" class="btn btn-danger" name="Recharge" value="Recharger">
</div>
</div>
</div>
</div>
</div>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.js"></script>
			<script type = "text/javascript">
      $(document).ready(function(){
       
      $('input[value="Recharger"]').click(function(){
      var cin = $("#cin").val();
      var mnt = $("#mnt").val();
        $.ajax({
                    type: "POST",
                    url: "alimentation.php",
                    data: {
						cin: cin,
						mnt: mnt
                    },
                    cache: false,
                    success: function(data) {
                            alert(data);
                            location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
    });
});


</script>
<div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2022 DjerbaPark - Admin Panel </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
</body>
</html>
	 
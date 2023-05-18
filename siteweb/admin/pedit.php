<?php 
session_start();
require "../config.php";
$id = intval($_GET['id']);
$_SESSION['eid']=$id;
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
    
<?php 
 include ('widnav.php');
 $query="SELECT * FROM parking WHERE id='$id'";
$result = $conn->query($query); 
while ($row = mysqli_fetch_array($result)) {
    $nom=$row['nom'];
    $np=$row['np'];
    $type=$row['typ'];
    $npd=$row['npd'];
    $adresse=$row['adresse'];
    $map=$row['map'];
} ?>
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Gestion de Parkings</h3>
							</div>
							<div class="modal-body" style="overflow: hidden;"  >
<hr>

 
	  <b style="margin-left: 10px;"> NOM: <input style="width: 250px;height: 30px;" type="text" id="edname" name="edname" value="<?php echo htmlspecialchars($nom) ; ?>" placeholder="Nom de parking" required minlength="4"  size="20" required> <hr style="height:1px; width:80%; border-width:0;  background-color:gray"></b>
      <b style="margin-left: 10px;"> NP : <input style="width: 250px;height: 30px;"  type="number" id="ednp" name="ednp" value="<?php echo htmlspecialchars($np); ?>" placeholder="Nombre des places" required min="1" minlength="1"  size="3" oninput="validity.valid||(value='');" required><hr style="height:1px; width:80%; border-width:0;  background-color:gray"></b>
      <b style="margin-left: 10px;"> NPD : <input style="width: 250px;height: 30px;"  type="number" id="ednpd" name="ednpd" value="<?php echo htmlspecialchars($npd) ; ?>" placeholder="Nombre de places Disponibles" required min="1" minlength="1"  size="3" oninput="validity.valid||(value='');" required><hr style="height:1px; width:80%; border-width:0;  background-color:gray"></b>
      <b style="margin-left: 10px;"> ADRESSE : <input style="width: 250px;height: 30px;"  type="text" id="edadresse" value="<?php echo htmlspecialchars($adresse) ; ?>"  name="edadresse" placeholder="Adresse de parking" required  minlength="4"  size="20" required><hr style="height:1px; width:80%; border-width:0;  background-color:gray"></b>
	  <b style="margin-left: 10px;">TYPE :</b>
       <b style="margin-left: 10px;">  Gratuit :<input type="radio" id="typ" name="typ"   value="gratuit" <?php echo ($type== 'gratuit') ?  "checked" : "" ;  ?>></b>
    <b style="margin-left: 10px;">  Payant :<input type="radio" id="typ" name="typ" value="payant" <?php echo ($type== 'payant') ?  "checked" : "" ;  ?>></b>
      </div>
      <hr style="height:1px; width:80%; border-width:0;  background-color:gray">
      <b style="margin-left: 10px;">  MAP: <input style="width: 250px;height: 30px;"  type="text" id="edmap" name="edmap" value="<?php echo htmlspecialchars($map) ; ?>"  placeholder="Lien de Google Maps" required minlength="4"  size="60" required></b>
      <hr style="height:1px; width:80%; border-width:0;  background-color:gray">
        
        <input id="<?php echo $id[$i];  ?>" type="Submit" style="font-size:12px;background-color:#70db70;" class="btn btn-primary" value="Modifier">
        <button  type="button" id="cl" style="font-size:12px;background-color:gray;" class="btn btn-secondary" data-dismiss="modal">Fermer</button>

</div>
</div>
</div> 
<hr>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.js"></script>
			<script type = "text/javascript">
      $(document).ready(function(){
$('input[value="Modifier"]').click(function() {
      var id=this.id;
		  var nom = $("#edname").val();
      var np = $("#ednp").val();
      var npd = $("#ednp").val();
		  var adresse = $("#edadresse").val();
	  	var typ = $("input[name='typ']:checked").val();
	  	var map = $("#edmap").val();
                
                    $.ajax({
                    type: "POST",
                    url: "updparking.php",
                    data: {
                        nom: nom,
                        np: np,
                        npd: npd,
                        adresse: adresse,
						map: map,
						typ: typ
                    },
                    cache: false,
                    success: function(data) {
                        $(location).prop('href', 'form?success=1');
                                        },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
    });
    $('#cl').click(function() {
     $(location).prop('href', 'form.php');
      
    });
});
</script>
	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
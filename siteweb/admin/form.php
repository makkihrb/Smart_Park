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
  <?php 
  if ($_GET['success']=="1"){?>
<div class="alert alert-success">votre Parking est bien modifié.   </div>

 <? }
  ?>
<?php include ('widnav.php'); ?>
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Gestion de Parkings</h3>
							</div>
							
<hr>
							<div class="module-body">
							<div class="login_btn"> <a href="#addModal" style="background-color:#73e600;" class="btn btn-success" data-toggle="modal" data-dismiss="modal"> Ajouter un Parking</a></div>
							<hr>
							<?php 
      $query="SELECT * FROM parking ORDER BY id ";
      $result = $conn->query($query);
  
$i=0;
$id=[];
$nom=[];
$adresse=[];
$np=[];
$npd=[];
$map=[];
      while ($row = $result->fetch_assoc()) {


$id[$i]=$row['id'];
$nom[$i]=$row['nom'];
$adresse[$i]=$row['adresse'];
$np[$i]=$row['np'];
$map[$i]=$row['map'];
$npd[$i]=$row['npd'];    
?>
 
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><?php echo ($map[$i]); ?>     
          </div>
          <div class="product-listing-content">
            <h5><a><?php echo htmlspecialchars($nom[$i]) ; ?></a></h5>
            <p class="list-price">ID PARKING: <?php echo ' '.$id[$i]; ?></p>
            <ul>
              <li><i class="fa fa-car" aria-hidden="true"> Places </i><?php echo htmlspecialchars($np[$i]) ; ?></li>
              <li><i class="fa fa-user" aria-hidden="true"> Places Dispo</i><?php echo htmlspecialchars($npd[$i]) ; ?></li>
              </ul>
              <ul>
              <li><i class="fa fa-calendar" aria-hidden="true"></i> 7/7 </li>
              <li><i class="fa-solid fa-clock"></i></i> 24/24 </li>
            </ul>
			    <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo htmlspecialchars($adresse[$i]) ; ?></span></div>
				<hr>
			     <input id="<?php echo $id[$i];  ?>"   type="button" name="edit" data-target="#editModal" data-toggle="modal" data-dismiss="modal"   class="btn btn-warning" style="font-size:12px; background-color:#ffcc00;" value ="Edit"  >
			     <input id="<?php echo $id[$i];  ?>"  type="button" name="del"     class="btn btn-danger" style="font-size:12px;background-color:red;" value ="Delete"  >
        </div>
          </div>

        <?php 
        $i++;
 }      
$_SESSION[del]='';
 ?>

</div>
						</div>

						
						
					</div> <!--/.content-->
				</div> <!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->


		  

<div class="modal fade" id="addModal"  >
  <div class="modal-dialog" role="document">
    <div class="modal-content"  >
      <div style="
    margin-top: 5px;"
    >
        <h5 >Ajout d'un Parking</h5>
        <hr style="height:1px; width:80%; border-width:0;  background-color:gray">
      </div>
      <div class="modal-body"  style="overflow: hidden;" >
      <b style="margin-left: 10px;">  Nom : <input style="width: 250px;height: 20px;" type="text" id="name" name="name"  placeholder="Nom de parking" required minlength="4"  size="20" required> <hr style="height:1px; width:80%; border-width:0;  background-color:gray"></b>
      <b style="margin-left: 10px;">  NP : <input style="width: 250px;height: 20px;" type="number" id="np" name="np" placeholder="Nombre de places" required min="1" minlength="1"  size="3" oninput="validity.valid||(value='');" required><hr style="height:1px; width:80%; border-width:0;  background-color:gray"></b>
      <b style="margin-left: 10px;">  ADRESSE : <input style="width: 250px;height: 20px;" type="text" id="adresse"   name="adresse" placeholder="Adresse de parking" required  minlength="4"  size="20" required><hr style="height:1px; width:80%; border-width:0;  background-color:gray"></b>
      <b style="margin-left: 10px;">   TYPE :</b>
	  <br>
    <b style="margin-left: 10px;">   Gratuit <input type="radio" id="gratuit" name="type"   value="gratuit"></b>
    <br>
    <b style="margin-left: 10px;"> 	  Payant <input type="radio" id="payant" name="type" value="payant"></b>
	 
      </div>
      <hr style="height:1px; width:80%; border-width:0;  background-color:gray">
      <b style="margin-left: 10px;">  MAP: <input style="width: 250px;height: 20px;" type="text" id="map" name="map"   placeholder="Lien de Google Maps" required minlength="4"  size="60" required></b>
      <hr style="height:1px; width:80%; border-width:0;  background-color:gray">
        
        <input type="Submit" style="font-size:12px;background-color:#70db70;" class="btn btn-primary" value="Ajouter">
        <button type="button" style="font-size:12px;background-color:gray;" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
    </div>
  </div>
</div>

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.js"></script>
			<script type = "text/javascript">
      $(document).ready(function(){
    $('input[value="Ajouter"]').click(function() {
		var nom = $("#name").val();
        var np = $("#np").val();
		var adresse = $("#adresse").val();
		var typ = $("input[name='type']:checked").val();
		var map = $("#map").val();
                if((nom=='')||(np=='')||(adresse=='')||(map=='')||($("input[name='type']:checked").length == 0)) {
                    alert("Please fill all fields.");
                    return false;
                }
 
                $.ajax({
                    type: "POST",
                    url: "addp.php",
                    data: {
                        nom: nom,
                        np: np,
                        adresse: adresse,
						map: map,
						typ: typ
						
                    },
                    cache: false,
                    success: function(data) {
                      
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
    });
      $('input[value="Delete"]').click(function() {
      id=this.id;
      alert(id);
	     $(location).prop('href', 'deletead.php?id='+id);
    });
    $('input[value="Edit"]').click(function() {
      id=this.id;
      alert(id);
	     $(location).prop('href', 'pedit.php?id='+id);
    });
      $('input[value="Modifier"]').click(function() {
      id=this.id;
		  var nom = $("#edname").val();
      var np = $("#ednp").val();
      var npd = $("#ednp").val();
		  var adresse = $("#edadresse").val();
	  	var typ = $("input[name='edtype']:checked").val();
	  	var map = $("#edmap").val();
                if((nom=='')||(np=='')||(adresse=='')||(map=='')||($("input[name='edtype']:checked").length == 0)) {
                    alert("Please fill all fields.");
                    return false;
                }
                    $.ajax({
                    type: "POST",
                    url: "addp.php",
                    data: {
                        nom: nom,
                        np: np,
                        adresse: adresse,
						map: map,
						typ: typ
						
                    },
                    cache: false,
                    success: function(data) {
                    
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
</body>
<?php 
session_start();
require "../config.php";
$id = $_GET['id'];
$_SESSION['eid']=$id;
if( !isset($_SESSION["adname"]) ){
    header("location:../adm.php");
    exit();
}

?>
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
								<h3>Gestion des Utilisateurs</h3>
							</div>
                            <div class="module-option clearfix">
                                <form>
                                <div class="input-append pull-left">
                                    <input type="text"  id="search" style="height: 30px; padding: 10px ;width: 320px;" placeholder="Rechercher par CIN..."></input>
                                    <input type="text"  id="search_nom" style=" margin-left :100px; height: 30px; padding: 10px ;width: 320px;" placeholder="Rechercher par Nom..."></input>

                                </div>
                                </form>
                                
                            </div>
                            <div class="module-body">
                            <?php 
      $query="SELECT * FROM Client ";
      $result = $conn->query($query);
  
$i=0;
$cin=[];
$nom=[];
$pre=[];
$genre=[];
$dn=[];
$tel=[];
$mail=[];
$dtr=[];
      while ($row = $result->fetch_assoc()) {


$cin[$i]=$row['cin'];
$nom[$i]=$row['Nom'];
$pre[$i]=$row['pre'];
$genre[$i]=$row['genre'];
$dn[$i]=$row['dn'];
$tel[$i]=$row['tel'];
$mail[$i]=$row['mail'];  
$dtr[$i]=$row['dtr'];   
$sld[$i]=$row['balance'];
?>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="media user">
                                            <a class="media-avatar pull-left" href="#">
                                                <img src="images/user.png">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-title">
                                                
                                                </h3>
                                                <p>
                                                   CIN :  <small class="muted"><?php echo $cin[$i]; ?></small></p>
                                                   NOM :  <small class="muted"><?php echo $nom[$i]; ?></small></p>
                                                   Prenom :  <small class="muted"><?php echo $pre[$i]; ?></small></p>
                                                   Solde : <small class="muted"><?php echo $sld[$i]; ?></small></p>
                                                   Genre :  <small class="muted"><?php echo $genre[$i]; ?></small></p>
                                                   Date Naissance :  <small class="muted"><?php echo $dn[$i]; ?></small></p>
                                                   tel :  <small class="muted"><?php echo $tel[$i]; ?></small></p>
                                                   E-mail :  <small class="muted"><?php echo $mail[$i]; ?></small></p>
                                                   Date de Rejoindre :  <small class="muted"><?php echo $dtr[$i]; ?></small></p>
                                                <div class="media-option btn-group shaded-icon">
                                                    <button class="btn btn-small" onclick="location.href='mailto:<?php echo $mail[$i]; ?>';">
                                                        <i class="fa fa-envelope"></i>
                                                    </button>
                                                    <a class="btn btn-small" href="deluser.php?cin=<?php echo $cin[$i];?>">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <?php 
        $i++;
 }      ?>
                                <!--/.row-fluid-->
                                <br />
                                
                            </div>
                        </div>
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
    <div class="footer">
		<div class="container">
			 

        <b class="copyright">&copy; 2022 DjerbaPark - Admin Panel </b>All rights reserved.
		</div>
	</div>
    <script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.js"></script>
			<script type = "text/javascript">
    $("#search").on("keyup", function() {
   var key = this.value.toLowerCase();
    $(".row-fluid").each(function() {
       var $this = $(this);
       $this.toggle($(this).text().indexOf(key) >= 0);
    });
});
</script>
<script type = "text/javascript">
    $("#search_nom").on("keyup", function() {
   var key = this.value.toLowerCase();
    $(".row-fluid").each(function() {
       var $this = $(this);
       $this.toggle($(this).text().indexOf(key) >= 0);
    });
});
</script>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>

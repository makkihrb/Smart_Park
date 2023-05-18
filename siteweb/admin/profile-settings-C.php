<?php
session_start();
require "../config.php";
if( !isset($_SESSION["adname"]) ){
    header("location:../admin.php");
    exit();

}
$query="SELECT * FROM histo  ";
        $result = $conn->query($query);
        $number_of_result = mysqli_num_rows($result);  
        $results_per_page=5;
        //determine the total number of pages available  
        $number_of_page = ceil ($number_of_result / $results_per_page);  
      
        //determine which page number visitor is currently on  
        if (!isset ($_GET['page']) ) {  
            $page = 1;  
        } else {  
            $page = $_GET['page'];  
        }  
      
        //determine the sql LIMIT starting number for the results on the displaying page  
        $page_first_result = ($page-1) * $results_per_page;  
      
        $id=[];
        $cin=[];
        $te=[];
        $ts=[];
        $mat=[];
        $idp=[];
        $nomp=[];
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

                    <section class="user_profile inner_pages">

<div class="row">
  <div class="col-lg-6 col-sm-8">
    <div class="profile_wrap">
      <h5 class="uppercase underline"style="margin-left:20px;">Les Réservations <span style="color:gray;font-weight:bold">  ( <?php echo $number_of_result;?> Réservations)</span></h5>
      <hr style="margin-left:20px; height:1px; width:100%; border-width:0;  background-color:gray">
      <div class="my_vehicles_list" style="margin-left:20px;">
      <?php
      $query = "SELECT * FROM histo LIMIT " . $page_first_result . ',' . $results_per_page;  
      $result = mysqli_query($conn, $query);  
      while ($row = mysqli_fetch_array($result)) {  
        $j=$row['idp'];
        $query2="SELECT * FROM parking WHERE id='$j'";
  $result2 = $conn->query($query2);
  while ($row2= $result2->fetch_assoc()) {

  
?>
      <ul class="vehicle_listing">
          <li>

              <h6><a  >ID de Reservation:<?php echo ' '.$row['id'];?></a></h6>
              <h8><b >Temps d'entrée:<?php echo ' '.$row['te'];?></b></h8><br>
              <h8><b >Temps de sortie:<?php echo ' '.$row['ts'];?></b></h8><br>
              <h8><b >Nom de Parking:<?php echo ' '.$row2['nom'];?></b></h8><br>
              <h8><b >Num de CIN de Client:<?php echo ' '.$row['cin'];?></b></h8>

          </li>
          <hr style=" height:1px; width:100%; border-width:0;  background-color:gray">
          <?
  }        
}
?>
<style>
 .pagination {   
        display: inline-block;   
        margin-left : 70px;
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: center;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: #fa2837;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: gray;   
    }   
        </style>   
<div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM histo";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records /$results_per_page);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='profile-settings-C.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='profile-settings-C.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='profile-settings-C.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='profile-settings-C.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  
  


      </div>
    </div>
  </div>
</div>
</div>
</section>
					</div> <!--/.content-->
				</div> <!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

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
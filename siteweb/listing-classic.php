<?php 
include "config.php";
require_once('logincontrol.php');
session_start();
$cin=$_SESSION['cin'];
$sql = "SELECT * FROM Client WHERE cin='$cin'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    $solde = $row['balance'];
  }
  $query="SELECT * FROM parking  ";
  $result = $conn->query($query);
  $number_of_result = mysqli_num_rows($result);  
  $results_per_page=3;
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

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Nos Parkings</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/b0e00e4a12.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Custom Colors -->
<link rel="stylesheet" href="assets/colors/red.css">
<!--<link rel="stylesheet" href="assets/colors/orange.css">-->
<!--<link rel="stylesheet" href="assets/colors/blue.css">-->
<!--<link rel="stylesheet" href="assets/colors/pink.css">-->
<!--<link rel="stylesheet" href="assets/colors/green.css">-->
<!--<link rel="stylesheet" href="assets/colors/purple.css">-->
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->  
</head>
<body>

 <?php require ('header.php'); ?>
  
<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Nos Parkings</h1>
      </div>
      <ul class="coustom-breadcrumb">
       
        <li>Listes de notre Parkings</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 
<!--Reservation Form  -->

<div class="modal fade" id="reserv">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Votre Réservation</h3>
      </div>
      <div class="modal-body">
        <form id="resform" action="reserver" method="post">
          <div class="form-group">
            <label>Temps D'entrée</label>
            <input type="datetime-local" class="form-control" placeholder="Temps D'entrée"  name="te" id="te" min ='<?php echo date('Y-m-d');?>T00:00' required>
          </div>
          <div class="form-group">  
            <label>Temps De Sortie</label>
            <input type="datetime-local" class="form-control" placeholder="Temps De Sortie" name="ts" id="ts" min ='<?php echo date('Y-m-d');?>T00:00' required>
          </div>
          <div class="form-group">
            <label>Matricule De voiture</label> 
			<input type="number" class="form-control" placeholder="xxx"  name="prefix" maxlength="3" size="3" id="pre" oninput="this.value=this.value.slice(0,this.maxLength)" required>
			<i>تونس</i>
			<input type="number" class="form-control" placeholder="xxxx" name="postfix" size="4" maxlength="4" id="post" oninput="this.value=this.value.slice(0,this.maxLength)" required>
			<input type="checkbox" name="radio" id="pe" > <b> Je confirme la Réservation </b>    
            
          </div>
          <div class="form-group">
           <input type="hidden" value=""  name="pid" id="pid" >
           <?php if ($solde == 0){ ?>
            <div class="alert alert-danger">Désolé , Recharger Votre Solde Pour Réserver. </div>
             
            <?   } ?> 
            <?php if ($solde>0) { ?>
            <input type="submit" value="obtenir Mon code QR" class="btn btn-block" name="btnqr" id="submit"  >
			      <? } ?>
      <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.js"></script>
			<script type = "text/javascript">
		  $(document).ready(function() {
    $('#submit').attr('disabled', true);
    $('#resform').change(function () {
          if (($('#te').val() <= $('#ts').val())&&($('#pre').val()!=='')&&($('#post').val()!=='')&&($("input[name='radio']:checked").val())){
			  console.log('valid');
            $('#submit').attr('disabled', false);
            $('#pid').val(id);

          }
         else {
            $('#submit').attr('disabled', true);
        }
    });
   
});

	 </script>
			
	 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--Reservation Form --> 

<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
      <?php $query="SELECT * FROM parking ORDER BY id LIMIT " . $page_first_result . ',' . $results_per_page; 
        $result = $conn->query($query);
		
$i=0;
$id=[];
$nom=[];
$adresse=[];
$np=[];
$npd=[];
$map=[];
$idp=1;
       while ($row = $result->fetch_assoc()) {
		   
	$id[$i]=$row['id'];
	$nom[$i]=$row['nom'];
	$adresse[$i]=$row['adresse'];
	$np[$i]=$row['np'];
	$map[$i]=$row['map'];
	$npd[$i]=$row['npd'];
  ?>
 
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><a href="#"><?php echo $row['map']; ?></a>      
          </div>
          <div class="product-listing-content">
            <h5><a href="#"><?php echo ($row['nom']); ?></a></h5>
            <? if ($row['typ']=='gratuit'){?>
              <b class="list-price"><?php echo $row['typ'];?></b>            <? }
            else {?> 
            <b class="list-price">1DT/Heure</b>
<? }?>
                        <ul>
              <li><i class="fa fa-car" aria-hidden="true">  </i> <b>Capacité <?php echo ' '.$row['np']; ?></b></li>
              <li><i class="fa fa-user" aria-hidden="true"> </i><b>Places libres <?php echo $row['npd']; ?></b></li>
              </ul>
              <ul>
              <li><i class="fa fa-calendar" aria-hidden="true"></i> 7/7 </li>
              <li><i class="fa-solid fa-clock"></i></i> 24/24 </li>
            </ul>
			 <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo htmlspecialchars($row['adresse']); ?></span></div>
      
           
            
            
             <?php if ($npd[$i] == 0){ ?>
            <div class="alert alert-danger">Désolé , Aucune Place disponible Pour le moment. </div>
             
            <?   } ?>
             <?php if($row['typ']=='payant') { ?>
                         <input id="<?php echo $id[$i]; ?>"  type="button" name="Reserver"  data-toggle="modal" data-target="#reserv" class="search_other" class="fa fa-ticket" style="font-size:12px;" value ="Reserver">
<? }?>
          </div>
        </div>
        <?
        $i++;
        $idp++;
}
?>
 <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.js"></script>
			<script type = "text/javascript">
        var id;
      $(document).ready(function(){
    $('input[value="Reserver"]').click(function() {
      id=this.id;
    });
});
</script>
<style>
 .pagination {   
        display: inline-block;   
    }   
    .pagination a {     
      font-weight:bold;    
        font-size:14px;  
        color: gray;   
        float:center;
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px  gray;   
    }   
    .pagination a.active {   
            background-color: #fa2837;   
            color: white; 
    }   
    .pagination a:hover:not(.active) {   
        background-color: #fa2837;   
        color: white; 
    }   
        </style>  
      <center>  <div class="pagination">
       
        <?php  
        $query = "SELECT COUNT(*) FROM parking";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records /$results_per_page);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='listing-classic?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='listing-classic?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='listing-classic?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='listing-classic?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
        </div><center>
      </div>
    </div>
  </div>
</section>
<!-- /Listing--> 

<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Autres Pages</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        <div><a href="home"><img src="assets/images/home.png" class="img-responsive" alt="image"></a></div>
        <div><a href="about_us"><img src="assets/images/aboutus.png" class="img-responsive" alt="image"></a></div>
        <div><a href="listing-classic"><img src="assets/images/park.png" class="img-responsive" alt="image"></a></div>
        <div><a href="contact-us"><img src="assets/images/phone.png" class="img-responsive" alt="image"></a></div>
        <div><a href="services"><img src="assets/images/services.png" class="img-responsive" alt="image"></a></div>
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 
<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h3><i  aria-hidden="true"></i>Real Time</h3>
            <p>Fonctionnalités En Temps Réel. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>100+</h2>
            <p>Voiture </p> <p>Garée Chaque Jour</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-location-arrow" aria-hidden="true"></i>10+</h2>
            <p>Parking Disponibles</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-credit-card" aria-hidden="true"></i>E-pay</h2>
            <p>Paiement En Ligne et Securisé</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 
<!--Footer -->
<?php require('footer.php') ; ?>
<!-- /Footer--> 

<!--Back to top-->
<?php require('icons.php') ; ?>
<!--/Back to top--> 
<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
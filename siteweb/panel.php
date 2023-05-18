<?php include 'config.php' ;
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

  <!--Header-->
<?php require ('headernc.php'); ?>
<!-- /Header --> 
  
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
            <h5><a href="#"><?php echo $row['nom'];?></a></h5>
            <p class="list-price"><?php echo $row['id'];;?></p>
            <ul>
              <li><i class="fa fa-car" aria-hidden="true"> Places </i><?php echo $row['np'];  ?></li>
              <li><i class="fa fa-user" aria-hidden="true"> Places Dispo</i><?php echo $row['npd']; ?></li>
              </ul>
              <ul>
              <li><i class="fa fa-calendar" aria-hidden="true"></i> 7/7 </li>
              <li><i class="fa-solid fa-clock"></i></i> 24/24 </li>
              
            </ul>
			 <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $row['adresse'];  ?></span></div>
       <?php if ($npd[$i] == 0){ ?>
            <div class="alert alert-danger">Désolé , Aucune Place disponible Pour le moment. </div>
             
            <?   } ?>
             <div  id="btn" data-toggle="modal" data-target="#loginform" class="search_other" <?php if ($npd[$i] == 0){ ?> hidden  <?   } ?>> <i  class="fa fa-ticket" style="font-size:12px;"></i> Reservez  </div>
            
          </div>
        </div>
        <?
        $i++;
}
?>
  <style>
 #pagination {   
        display: inline-block;   
        margin-left : 350px;
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
        <div id="pagination" class="pagination">
       
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
            echo "<a href='panel?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='panel.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='panel.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='panel.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
        </div>
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
        <div><a href="index.php"><img src="assets/images/home.png" class="img-responsive" alt="image"></a></div>
        <div><a href="about_us.php"><img src="assets/images/aboutus.png" class="img-responsive" alt="image"></a></div>
        <div><a href="nosparkings.php"><img src="assets/images/park.png" class="img-responsive" alt="image"></a></div>
        <div><a href="contact-us.php"><img src="assets/images/phone.png" class="img-responsive" alt="image"></a></div>
        <div><a href="services.php"><img src="assets/images/services.png" class="img-responsive" alt="image"></a></div>
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 

<!--Footer -->
<?php require ('footer.php'); ?>
<!-- /Footer--> 


<!--Back to top-->
<div id="back-top" class="back-top"> <a href="top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 


<!--login et register et password recover-->
<?php require ('connexion.php'); ?> 
<!--/login et register et password recover--> 
<!-- Scripts --> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
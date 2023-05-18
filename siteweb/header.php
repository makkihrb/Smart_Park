<?php 
include "config.php";
session_start();
$cin=$_SESSION['cin'];
$sql = "SELECT * FROM Client WHERE cin='$cin'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    $solde = $row['balance'];
  }
?>
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="./home.php" ><img src="assets/images/logo.png" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">E-MAIL D'ASSISTANCE : </p>
              <a href="mailto:info@example.com">parkdjerba@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">ASSISTANCE TÉLÉPHONIQUE:</p>
              <a href="tel:61-1234-5678-09"></a> +21628913456 || +21628913453 </div>
            
			
              
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $_SESSION['Nom'].'  '.$_SESSION['pre'];?> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
                <li><a href="profile-settings">Profil</a></li>
                <li><a href="myreservations">Historique De Reservation</a></li>
                <li><a href="logout">Déconnexion</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-usd" aria-hidden="true"></i></div>
          <form  id="header-search-form">
            <?php if($solde>0){ ?>
<input type="hidden" id="solde" value="1" >
            <? } ?>
            <input type="text" value=" Votre Solde : <?php echo $solde ; ?> TND" class="form-control" readonly  style="color: black;">
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="./home">Home</a></li>
              <li><a href="about_us">À Propos</a></li>
              <li><a href="listing-classic">Nos Parkings</a></li>
              <li><a href="contact-us">Contactez-nous</a></li>
              <li><a href="services">Services</a></li>
              <li><a href="avis">AVIS</a></li>
          
         
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
</header>
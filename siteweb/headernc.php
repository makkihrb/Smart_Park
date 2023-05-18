<?php 
include "config.php";
session_start();
?>
<header>
<?php echo $_SESSION[register];echo $_SESSION[forget]; $_SESSION[login]; ?> 
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="assets/images/logo.png" alt="image"/></a> </div>
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
            <div class="social-follow" >
              <ul>
                <li><a href="https://www.facebook.com/Djerba-Park-100811761304145"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
               
              </ul>
            </div>
            <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Connexion / Inscription</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="control-label">
              
              
          </div>
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="./">Home</a></li>
              <li><a href="about_us">À Propos</a></li>
              <li><a href="nosparkings">Nos Parkings</a></li>
              <li><a href="contact-us">Contactez-nous</a></li>
              <li><a href="services">Services</a></li>
              <li><a href="avis">AVIS</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>
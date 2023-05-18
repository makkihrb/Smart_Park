<?php 
session_start();
require "../config.php";
if( !isset($_SESSION["adname"]) ){
    header("location:../admin.php");
    exit();
}
?>
<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="panel.php">Djerba Park - Panneau d'Administration </a>
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <?php echo $_SESSION[del];?>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="panel"><i class="fa fa-tachometer"></i> Tableau De Bord
                                </a></li>
                                <li><a href="message"><i class="fa fa-inbox"></i> Boîte de Réception </a></li>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="fa fa-cogs">
                                </i> Gestion des taches <i class="fa fa-chevron-circle-down"></i><i class="fa fa-chevron-circle-up">
                                </i></a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="recharge"><i class="fa fa-money"></i> Alimentation d'un Compte </a></li>
                                        <li><a href="form"><i class="fa fa-product-hunt"></i> Gestion des  Parkings </a></li>
                                        <li><a href="listuser"><i class="fa fa-address-book"></i> Gestion des Utilisateurs </a></li>
                                        <li><a href="smartsecuritycam"><i class="fa fa-car"></i> Detection des Voitures </a></li>
                                        <li><a href="checkqr"><i class="fa fa-qrcode"></i> Vérification des Reçus </a></li>
                                    </ul>
                                </li>
                            </ul>           
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="charts?page=1"><i class="fa fa-history"></i> Historique des Réservations </a></li>
                            </ul>
                               
                            <ul class="widget widget-menu unstyled">
                                <li><a href="securitycam"><i class="fa fa-video-camera"></i> Webcam de Sécurité </a></li>
                            </ul>

                            <ul class="widget widget-menu unstyled">
                                
                                <li><a href="adlogout"><i class="fa fa-sign-out"></i>Déconnexion </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
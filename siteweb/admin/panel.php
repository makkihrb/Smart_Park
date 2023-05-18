<?php
session_start();
require "../config.php";
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
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <?php  $count = "SELECT COUNT(*) as cnt FROM Client WHERE dtr >= NOW() - INTERVAL 1 DAY";
                                           $result = $conn->query($count);
                                           $row = mysqli_fetch_assoc($result);
                                    ?>
                                     <a href="#" class="btn-box big span4"><i class="fa fa-users"></i><b><?php echo $row['cnt']; ?></b>
                                        <p class="text-muted">
                                        Utilisateurs des dernières 24 h. </p>

                                    <?php  $count = "SELECT COUNT(*) as cnt FROM histo WHERE te >= NOW() - INTERVAL 1 DAY";
                                           $result = $conn->query($count);
                                           $row = mysqli_fetch_assoc($result);
                                    ?>
                                    </a><a href="#" class="btn-box big span4"><i class="fa fa-ticket"></i><b><?php echo $row['cnt']; ?></b>
                                        <p class="text-muted">
                                           Reservations des dernières 24 h.  </p>
                                        
                                    <?php  $count = "SELECT COUNT(*) as cnt FROM parking";
                                    $result = $conn->query($count);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
                                    
                                    </a><a href="#" class="btn-box big span4"><i class="fa fa-product-hunt"></i><b><?php echo $row['cnt']; ?></b>
                                        <p class="text-muted">
                                            Nombre de Parking</p>

                                    <?php  $count = "SELECT COUNT(*) as cnt FROM histo";
                                    $result = $conn->query($count);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
                                    </a><a href="#" class="btn-box big span4"><i class="fa fa-ticket"></i><b><?php echo $row['cnt']; ?></b>
                                        <p class="text-muted">
                                        Total Reservations</p>
                                    </a> 
                                    <?php  $count = "SELECT COUNT(*) as cnt FROM Client";
                                    $result = $conn->query($count);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
                                    </a><a href="#" class="btn-box big span4"><i class="fa fa-users"></i><b><?php echo $row['cnt']; ?></b>
                                        <p class="text-muted">
                                        Total Clients</p>
                                    </a> 
                                   
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!--/#btn-controls-->
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
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
</html>



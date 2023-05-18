<!DOCTYPE html>
<?php
session_start();
require "../config.php";
if( !isset($_SESSION["adname"]) ){
    header("location:../admin.php");
    exit();
}

    if (! function_exists('imap_open')) {
        echo "IMAP is not configured.";
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
                        <?php
                      $connection = imap_open('{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX', 'parkdjerba@gmail.com', 'Tunis123', OP_READONLY) or die('Cannot connect to Gmail: ' . imap_last_error());
          
                    /* Search emails from gmail inbox*/
                    $mails = imap_search($connection, 'FROM "djerban"');
          
                    /* loop through each email id mails are available. */
                    if ($mails) {
          
                        /* Mail output variable starts*/
                        $mailOutput = '';
                        $mailOutput.= '<table><tr> <th> Date et Temps </th> <th> De Qui et le Contenu de Mail </th></tr>';
          
                        /* rsort is used to display the latest emails on top */
                        rsort($mails);
          
                        /* For each email */
                        foreach ($mails as $email_number) {
          
                            /* Retrieve specific email information*/
                            $headers = imap_fetch_overview($connection, $email_number, 0);
          
                            /*  Returns a particular section of the body*/
                            $message = imap_fetchbody($connection, $email_number, '1');
                            $subMessage = substr($message, 0, 150);
                            $finalMessage = trim(quoted_printable_decode($subMessage));
          
                            $mailOutput.= '<div class="row">';
          
                            /* Gmail MAILS header information */                   
                            $mailOutput.= '<td><span class="columnClass">' .
                                         $headers[0]->date . '</span></td>';
                            $mailOutput.= '</div>';
          
                            /* Mail body is returned */
                            $mailOutput.= '<td><span class="column">' . 
                            $finalMessage . '</span></td></tr></div>';
                        }// End foreach
                        $mailOutput.= '</table>';
                        echo $mailOutput;
                    }//endif 
                      else
                       { 
                           echo "fail ";}
                    /* imap connection is closed */
                    imap_close($conn);
                    ?>
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>

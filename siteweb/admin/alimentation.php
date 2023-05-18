<?
session_start();
require('../config.php');
$cin = mysqli_real_escape_string($conn, $_POST['cin']);
$mnt = mysqli_real_escape_string($conn, $_POST['mnt']);
$query ="SELECT * FROM Client where cin='$cin'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)==1){
    $sql = "UPDATE Client SET balance=balance+'$mnt' WHERE cin='$cin'";
if(mysqli_query($conn, $sql)){
    echo "Montant Ajoutée avec success  : ".$cin;
}  else{
    echo "Erreur Impossible de e. " . mysqli_error($link);
}
}
else {
    echo "compte non trouvé merci de vérifier le numéro CIN. " . mysqli_error($link);
    
}
?>
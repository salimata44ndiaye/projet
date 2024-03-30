<?php
$host ="localhost";
$user="root";
$mdp="";
$db="tpprojet";

$conn =mysqli_connect($host,$user,$mdp,$db);
if (!$conn ) {
    die("connexion erreur: ".mysqli_connect_error());
    
}
session_start();
session_unset();
session_destroy();
header("location: connection.php");

exit;
?>
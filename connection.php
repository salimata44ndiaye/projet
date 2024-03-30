<?php
$host = "localhost";
$user = "root";
$mdp = "";
$db = "phpprojet";

$conn =mysqli_connect($host,$user,$mdp,$db);
//echo " connexion reussi";
if ( isset ($_POST[''])) {
  $login = $_POST['email'];

  $email = $_POST['mdp'];

  $req ="select  id from connexion where login='$login' and email='$email' ";
  


  $result= mysqli_query($conn,  $req);
  
  if (mysqli_num_rows($result) ==1) {
    $_SESSION['email']=$email;
    header("location: accueil.php");
  
  }else {
    $error = "nom d'utilisateur ou mdp incorret";
  }
  mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/connec.css">
  <title>Document</title>
</head>
  <div class="container">
    
     
    <form action="formulaire.php" method="POST" >

      <h2>Connexion</h2>

      <input type="text" id="email" name="email" placeholder="exemple@gmail.com"><br>
         
      <input type="text" id="mdp" name ="mdp"  placeholder="votre fonctionalite"><br>

         
     
      <input type="submit" value="se connecter" name="connecte">

    </form>

  </div>
<?php if(isset($error)) {
  echo "<h3>$error</h3>";
}
?>
  





</body>
</html><?php
$host = "localhost";
$user = "root";
$mdp = "";
$db = "application";

$conn =mysqli_connect($host,$user,$mdp,$db);
//echo " connexion reussi";
if ( isset ($_POST[''])) {
  $login = $_POST['login'];

  $email = $_POST['email'];

  $req ="select  id from connexion where login='$login' and email='$email' ";
  


  $result= mysqli_query($conn,  $req);
  
  if (mysqli_num_rows($result) ==1) {
    $_SESSION['email']=$email;
    header("location: accueil.php");
  
  }else {
    $error = "nom d'utilisateur ou mdp incorret";
  }
  mysqli_close($conn);
}

?>


<?php
$host ="localhost";
$user="root";
$mdp="";
$db="phpprojet";

$conn =mysqli_connect($host,$user,$mdp,$db);
if (!$conn ) {
    die("connexion erreur: ".mysqli_connect_error());
    
}
if ($_SERVER ["REQUEST_METHOD"] == "POST"&& isset ($_POST['valider'])) {


    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $hentre=$_POST['hentre'];
    $hdesortie=$_POST['hdesortie'];
    $date=$_POST['date'];
    $profession=$_POST['profession'];

   $sql_insert ="INSERT INTO pointage(nom,prenom,hentre,hdesortie,date,profession) VALUES ('$nom''$prenom', '$hentre','$hdesortie','$date','$profession')";
    if (mysqli_query ($conn, $sql_insert))  {

        echo"donnees insereer avec succes";
        
    }else{  
        echo "Erreur: ".$sql_insert. "<br>".mysqli_error($conn);
    }
    
}
if (isset($_POST['delete_row'])) {
    $row_id = $_POST['row_id'];
    $sql_delete = "DELETE FROM pointage WHERE id = '$row_id'";
    if (mysqli_query($conn, $sql_delete)) {
        echo "Enregistrement supprimé avec succès. <br> <br>";
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
<style>
        table {
            border-collapse: collapse;
            text-align: center
       
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
     
        }

        th {
            background-color: #000;
            color: #ffff;
        }

        tr {
            background-color: #fff;
            color: #000;
        }
    </style>
    <table border="1">
        <tr>     
            <th>nom</th> 
            <th>prenom</th>
            <th>hdentré</th>
            <th>hdesortie</th>
            <th>date</th>
            <th>Profession</th>
            <th>Action</th>
        </tr>
        
        <?php
        $sql_select = "SELECT * FROM pointage";
        $result = mysqli_query($conn, $sql_select);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["prenom"] . "</td>";
                echo "<td>" . $row["hentre"] . "</td>";
                echo "<td>" . $row["hdesortie"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["profession"] . "</td>";
               
               
                
                
                echo "<td>
                        <form method='post'>
                           <input type='hidden' name='row_id' value='" . $row['id'] . "'>
                            <input type='submit' name='delete_row' value='Supprimer'>
                           <a href='formulaire.php?id=".$row['id'].">ajouter</a> 
                            
                    
                        </form>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Aucun joueur trouvé</td></tr>";
        }
        mysqli_close($conn);
        ?>
        <a href="pgconnecxion.php">deconnecter</a>

    </table>
</body>
</html>
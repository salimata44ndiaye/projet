<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr bgcolor='#CCCCCC'>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Libelle</th>
            <th>Profession</th>
            <th>Actions</th>
        </tr>

        <?php
            include('connection.php');

            $res = "select pointage.id, pointage.nom, pointage.prenom,
            pointage.hentre,filliere.libelle, filliere.description from apprenant inner join
            filliere on filliere.id= apprenant.idf;";

            $resultat=mysqli_query($conn,$res);

            while($result= mysqli_fetch_assoc($resultat)){
                echo '<tr>';
                echo"<td>".$result['id']."</td>";
                echo"<td>".$result['nom']."</td>";
                echo"<td>".$result['prenom']."</td>";
                echo"<td>".$result['hentre']."</td>";
                echo"<td>".$result['hdesortie']."</td>";
                echo"<td>".$result['profession']."</td>";
                echo "<td><a href=\"supprimer.php?id=$result[id]\"
                onClick=\"return confirm('Etes vous sur ?')\">Supprimer</a></td>";
                echo "<td><a href=\"modifie.php?id=$result[id]\">Modifier</a></td>";
                echo"</tr>";
            }
            ?>
    </table>

    <a href="inserer.html">inserer</a>
</body>

</html>
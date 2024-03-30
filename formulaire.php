<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/for.css">
</head>
<body>
    <header>
    <div class="container">
    <section>

        <form action="ajout.php" method="POST">
        <label for="nom">nom</label>
        <input type="text" id="nom" name="nom"><br>

           <label for="prenom">prenom</label>
           <input type="text" id="prenom" name="prenom"><br>



            <label for="libelle">hd'entré</label>
           <input type="text" id="hd'entré" name="hd'entré"><br>

           <label for="hdesortie">hdesortie</label>
           <input type="text" id="hdesortie" name="hdesortie"><br>

           <label for="date">date</label>
           <input type="text"id="date" name="date"><br>

           <label for="profession">profession</label>
           <input type="text"id="profession" name="profession"><br>

           <input type="submit" id="valider" name="valider"  value="valider" >
`
        </form>

    </section>
    </header>
    </div>
</body>
</html>

<!-- php -->

<?php

session_start();

if($_POST)
{
    $_SESSION['pseudo'] = $_POST['$nom'];
    $_SESSION['mdp'] = $_POST['$mdp'];
}

if(isset($_SESSION['pseudo'])) 
{
    echo "Bienvenue: " . $_SESSION['pseudo'] . "<br>";
}

if(isset($_SESSION['mdp']))
{
    echo "Votre mot de passe est valide";
}

foreach ($_SESSION as $key => $nom) {
    echo "$nom";
}

?>

<!-- html -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-intermediaire-devoir1-index</title>
</head>
<body>

    <form method="post" action="search.php">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo"><br> <br>
            
        <label for="mdp">Mot de passe</label><br>
        <input type="text" id="mdp" name="mdp"><br><br>
    
        <input type="submit" value="Se connecter">
    </form>
</body>

</html>
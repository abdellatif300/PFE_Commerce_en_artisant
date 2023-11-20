<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NoS1gnal" />
    <title>parametre</title>
</head>

<body>
    <?php

    session_start();
    $id = $_GET['passe'];
    $nom = $_GET['email'];
 
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');

        $response = $bdd->exec("UPDATE clientt SET photo='$nom', nproduit='$preno  where id = $id");

        header ('location:./mecont.php');
    } catch (Exception $e) {
        echo 'erreur de connexion' . $e->getMessage();
    }
    ?>
</body>

</html>
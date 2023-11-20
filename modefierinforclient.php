
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
    $code = $_GET['aa'];
    $nom = $_GET['bb'];
    $prenom = $_GET['cc'];
    $num = $_GET['dd'];
    $email = $_GET['ee'];
    $mdp = $_GET['ff'];
    $image = $_GET['image'];
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');

        $response = $bdd->exec("UPDATE clientt SET Nom='$nom', Prenom='$prenom',telephone='$num', email='$email', passw='$mdp', imge='$image'  where id =$code");

        header('location:./mecont.php');

        //header ('location:./mecont.php');
    } catch (Exception $e) {
        echo 'erreur de connexion' . $e->getMessage();
    }
    ?>
</body>

</html>
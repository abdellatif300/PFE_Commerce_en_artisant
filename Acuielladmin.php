<?php


session_start();
try{
   
    $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');
    
    $getS=$bdd->prepare("SELECT count(*) FROM produits");
    
    }catch(Exception $e){   
    die('une erreur a ete trouve : ' .$e->getMessage());
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  include 'C:\xampp1\htdocs\projects\navbar.php'; ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <center><h1>Bienvenu  denns la page admine</h1>
             <a href="admin.php" style="text-decoration:none"><h2>Client</h2></a>
             <a href="produitadmin.php" style="text-decoration:none"><h2>Produit</h2></a>
             <a href="messagedeclient.php" style="text-decoration:none"><h2>Message</h2></a>
             
        </center>

</body>
</html>
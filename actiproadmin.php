<?php
session_start();
try{
   
    $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');
    
    $getS=$bdd->prepare("SELECT * FROM produits");
    $getS->execute(array($_SESSION['auth']));

    }catch(Exception $e){   
    die('une erreur a ete trouve : ' .$e->getMessage());
    }
   

?>
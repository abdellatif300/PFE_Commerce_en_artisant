<?php


session_start();
try{
   
    $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');
    }catch(Exception $e){   
    die('une erreur a ete trouve : ' .$e->getMessage());
    }
    $hhh =  $bdd->query('SELECT * FROM produits WHERE nproduit=?  AND Prix=? ');

    if(isset($_GET['nom']) AND isset($_GET['min']) AND isset($_GET['max'])){
        if(!empty($_GET['nom']) AND !empty($_GET['min']) AND !empty($_GET['max'])){

            $rrr = $_GET['nom'];
            $eee = $_GET['min'];
            $ttt = $_GET['max'];


            $hhh =  $bdd->query('SELECT * FROM produits WHERE nom LIKE ');

        }
    }


?> 
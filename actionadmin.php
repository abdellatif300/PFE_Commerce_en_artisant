<?php
session_start();
try{
   
    $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');
    
    $getD=$bdd->prepare("SELECT * FROM clientt");
    $getD->execute(array($_SESSION['auth']));

    }catch(Exception $e){   
    die('une erreur a ete trouve : ' .$e->getMessage());
    }
   

?>
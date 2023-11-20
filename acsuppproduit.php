<?php

session_start();
try{
   
    $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');
    }catch(Exception $e){   
    die('une erreur a ete trouve : ' .$e->getMessage());
    }
    if(isset($_GET['id'])){
        echo "llrlg";
        $idf = $_GET['id'];
        if(!empty($idf)){

            $query = "DELETE  FROM produits WHERE id=$idf";
            $bdd->exec($query);
            header ('location:./produitadmin.php');

        }
       
        
    }

?>
<?php

session_start();
try{
   
    $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');
    }catch(Exception $e){   
    die('une erreur a ete trouve : ' .$e->getMessage());
    }

  
        
        $idf = $_GET['id'];
      

            $query = "DELETE  FROM produits WHERE id=$idf";
            $bdd->exec($query);
            header ('location:./mecont.php');

        
       
        
    

?>
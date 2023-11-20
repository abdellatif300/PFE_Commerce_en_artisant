<?php

session_start();
try{
   
    $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');
    }catch(Exception $e){   
    die('une erreur a ete trouve : ' .$e->getMessage());
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        if(!empty($id) && is_numeric( $id)){

            $query = "DELETE  FROM clientt WHERE id=$id";
            $bdd->exec($query);
            header ('location:./admin.php');

        }
       
        
    }

?>
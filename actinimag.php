<?php
session_start();
try{
   
 $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');
 if(isset($_POST['OK'])){
      
    $bd=$bdd->prepare("UPDATE clientt SET imge= ? WHERE id =?");
    $bd->execute(array($_POST['image'],$_SESSION['id']));
    header('location:./mecont.php');
  }else{
    echo "image";
  }
 }catch(Exception $e){   
 die('une erreur a ete trouve : ' .$e->getMessage());
 }

?>
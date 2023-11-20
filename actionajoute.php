<?php
 session_start();
try{ 
$bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');
}catch(Exception $e){   
die('une erreur a ete trouve : ' .$e->getMessage());
}

if(isset($_POST['valid'])){
   if(!empty($_POST['file']) AND !empty($_POST['produit']) AND !empty($_POST['prix']) AND !empty($_POST['cate']) AND !empty($_POST['des'])){
      $d=date('y/m/d');
      //echo $_SESSION[''];
     $bd=$bdd->prepare("INSERT INTO produits(photo,nproduit,Prix,categore,Descript,idvend,email,dated)VALUES(?,?,?,?,?,?,?,?)");
     $bd->execute(array($_POST['file'],$_POST['produit'],$_POST['prix'],$_POST['cate'],$_POST['des']
       ,$_SESSION['id'],$_SESSION['email'],$d));
       echo 'envoyer';
   }else{
     echo "image";
   }
   
}
?>
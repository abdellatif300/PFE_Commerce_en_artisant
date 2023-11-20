<?php
session_start();
try{
   
 $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');
 }catch(Exception $e){   
 die('une erreur a ete trouve : ' .$e->getMessage());
 }
 if(isset($_GET['id'])){
    $B=$bdd->prepare("SELECT * FROM produits WHERE id=?");
    $B->execute(array($_GET['id']));
    $B=$B->fetch();
    $getB=$bdd->prepare("SELECT * FROM clientt WHERE id=?");
    $getB->execute(array($B['idvend']));
 }
if(isset($_GET['categore'])){
 $cate = $_GET['categore'];
 $getA=$bdd->prepare("SELECT * FROM produits WHERE categore = ?");
 $getA->execute(array($cate ));
}

else{
    $getA=$bdd->prepare("SELECT * FROM produits WHERE idvend=?");
    $getA->execute(array($_SESSION['id']));
    }
?>
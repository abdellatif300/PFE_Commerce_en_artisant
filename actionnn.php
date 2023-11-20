<?php
session_start();
try{  
    $bdd = new PDO('mysql:host=localhost;dbname=artisant;', 'root', '');
    }catch(Exception $e){
    die('une erreur a ete trouve : ' .$e->getMessage());
    }
    if(isset($_POST['valid'])){
        if(!empty($_POST['username']) && !empty($_POST['numbre']) && !empty($_POST['dat'])){
            $enome = htmlspecialchars($_POST['username']);
            $eprenome = htmlspecialchars($_POST['numbre']);
            $etelee = htmlspecialchars($_POST['dat']);
            $isert = $bdd->prepare("INSERT INTO cartebonk(user, numerocarte, date)VALUES(?, ?, ?,)");
            $isert->execute(array($enome , $eprenome, $etelee)); 
            echo "fjrjgjoiro";
        }}
?>

<?php

session_start();
try{
   
 $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');
 }catch(Exception $e){   
 die('une erreur a ete trouve : ' .$e->getMessage());
 }
     

 $Z=$bdd->prepare("SELECT * FROM contacte");
 $Z->execute(array());
 


 ?>
<?php 
 
session_start();
try{  
    $bdd = new PDO('mysql:host=localhost;dbname=artisant;', 'root', '');
    }catch(Exception $e){
    die('une erreur a ete trouve : ' .$e->getMessage());
    }

    $B=$bdd->prepare("SELECT id ,photo ,nproduit FROM produits WHERE id=?");
    $B->execute(array($_GET['id']));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
<?php  include 'C:/xampp1/htdocs/projects/navbar.php'; ?>

<div class="cont">
            
            <?php  while($quistion =  $B->fetch()){?>
                 <div class="card">
                 
                     <img src="./imag/<?=$quistion['photo']?>" alt="ii"> 
                      <h5 class="AZ">Nom produit : <?=$quistion['nproduit'];?></h5>
                      <div class="er">
                          
                      <a href="Modifier.php?id=<?=$quistion['id']?>"><button>Modéfirr</button></a>
                      <a href="clintsuppremproduit.php?id=<?=$quistion['id']?>"><button>Supprimer</button></a>
                      </div>
                     
                 </div>
               <?php }
             ?>
             
         </div>

         <?php  include 'C:\xampp1\htdocs\projects\Fot4.php'; ?>
    
</body>
</html>
<?php 
@require('./actionaffichep.php'); 
?>
<?php
   try{
  
    $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');
    }catch(Exception $e){   
    die('une erreur a ete trouve : ' .$e->getMessage());
    } 
       $getA=$bdd->prepare("SELECT * FROM produits WHERE id=?");
       $getA->execute(array($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plus</title>
    <link  rel="stylesheet"  href="detail.css">
</head>
<body>
<?php  include 'C:/wamp/www/projects/navbar.php'; ?>
  <div class="detail">
        <div class="foot">
                      
                <?php  while($info = $getB->fetch()):?>
                <div class="info">
                    <div class="profile-pic-div">
                        <img src="./imag/<?=$info['imge']?>" id="photo">
                        <input type="file" id="file">
                        
                    </div>
                        <h5 class="AS">Nom : <?=$info['Nom'];?></h5>
                        <h5 class="AS">Prenom : <?=$info['Prenom'];?></h5>
                        <h5 class="AS"><img src="watsap.jpeg"> <?=$info['telephone'];  ?></h5>
                        <h5 class="AS"><img src="gmaill.jpeg"> <?=$info['email'];?></h5>
               </div>  
            
            <?php endwhile
              ?>
            
        </div>

     <div class="inf">
        <?php  while($quistion = $getA->fetch()){
          
               ?>
                   <div class="carder">
                          <img src="./imag/<?=$quistion['photo']?>" alt="ajoutr profiele"> 
                        <div class="dd">
                           <h5 class="price">Nom produit : <?=$quistion['nproduit'];?></h5>
                           <h5 class="price">Prix : <?=$quistion['Prix'];  ?></h5>
                           <h5 class="pricee">Description :<br>
                           <br>
                            <?=$quistion['Descript'];?></h5>
                           <a href="plus.php?id=<?=$quistion['id']?>"></a>
                        </div>   
                   </div>
                <?php
            }
          ?>
          

     </div>
     
</div>
<button><a href="nnn.php"> Achat produit</a></button>
<br>
<br>

<?php  include 'C:/wamp/www/projects/Fot4.php'; ?>
</body>
</html>

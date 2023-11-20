<?php require('./actionaffichep.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gypse</title>
    <link  rel="stylesheet"  href="habite.css">
</head>
<body>
<?php  include 'C:\xampp1\htdocs\projects\navbar.php'; ?>
<div class="contain">
      <?php  while($quistion = $getA->fetch()){?>
         
           <div class="carder">
                        <img src="./imag/<?=$quistion['photo']?>" alt="ii"> 
                         <h5 class="AZ">Nom produit : <?=$quistion['nproduit'];?></h5>
                         <h5 class="price">Prix : <?=$quistion['Prix'];  ?></h5>
                         <a href="plus.php?id=<?=$quistion['id']?>"><button>Plus de détails</button></a>
                  
            </div>
      <?php }
      ?>
    </div>
    <?php  include 'C:/xampp1/htdocs/projects/Fot4.php'; ?>
</body>
</html>
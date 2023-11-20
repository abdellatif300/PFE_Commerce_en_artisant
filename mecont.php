<?php 
include('./actionaffichep.php'); 
if(isset($_SESSION['id'])){
  $getR=$bdd->prepare("SELECT * FROM clientt WHERE id=?");
  $getR->execute(array($_SESSION['id']));
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mone compte</title>
    <link rel="stylesheet" href="maycompt.css">
    
</head>
<body>
  
<?php  include 'C:\xampp1\htdocs\projects\navbar.php'; ?>
<div class="ando">
<a href="ajouteproduit.php"><button>Ajoute un produit</button></a>
   <div class="may">
            <div class="foot">
                      
                <?php  while($info = $getR->fetch()):?>
                <div class="info">
                <div class="profile-pic-div">
                    <form action="./actinimag.php" method="POST">
                        <img src="./imag/<?=$info['imge']?>" id="photo">
                        <input type="file" id="file" name="image">
                    
                      </form>
                     <div class="asya"><a href="Modifiert.php?id=<?=$info['id']?>"><input type="submit" value="Modéfier profiel"></a>
                </div></div> 
              
                  <h5 class="AS">Nom : <?=$info['Nom'];?></h5>
                  <h5 class="AS">Prenom : <?=$info['Prenom'];?></h5>
                  <h5 class="AS">telephone : <?=$info['telephone'];  ?></h5>
                  <h5 class="AS">Email : <?=$info['email'];?></h5>
                </div>  
            
            <?php endwhile
              ?>
            
            </div>
            
            <div class="cont">
            
               <?php  while($quistion = $getA->fetch()){?>
               
                    <div class="card">
                      <a href="updat.php?id=<?=$quistion['id']?>">
                        <img src="./imag/<?=$quistion['photo']?>"> </a> 
                         <h5 class="AZ">Nom produit : <?=$quistion['nproduit'];?>
                         
                        
                         </h5>
                    </div>
                  <?php }
                ?>
                
            </div>
          
    </div>
    </div> 

    <?php  include 'C:/xampp1/htdocs/projects/Fot4.php'; ?>
    <script src="app.js"></script>
</body>
</html>
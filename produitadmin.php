
<?php require('./actiproadmin.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit</title>
    <link rel="stylesheet" href="admin.css" >
      <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
</head>
<body>
<?php  include 'C:\xampp1\htdocs\projects\navbar.php'; ?>
<div class="but">
<button ><a href="ajouteproduit.php" class="text-light">Ajoute un produit</a></button>
</div>
<div class="container">
    <table>
  <thead>
    <tr>
      <th >vendeur</th>
      <th>Produit</th>
      <th>Prix</th>
      <th>Categore</th>
      <th>Description</th>
      <th>Operation</th>
    </tr>
  </thead>
  <tbody>
      <?php
       
       while($qui = $getS->fetch()){
        
         ?>
              <?php  $idf=$qui['id'] ?>
                 <tr>
                 <td><?=$qui['idvend']?></td>
                  <td><?=$qui['nproduit']?></td>
                  <td><?=$qui['Prix']?></td>
                  <td><?=$qui['categore']?></td>
                  <td><?=$qui['Descript']?></td>
                  <td>
                  <button><a href="" class="text-light">modefier</a></button>
                  <button><a href="acsuppproduit.php?id=<?=$idf ?>" class="text-light">suppreme</a></button>
                </td>
                </tr>                  
         <?php
       }
      ?>
</div>
</body>
</html>
<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajoute produit</title>
    <!-- CSS only -->
<link rel="stylesheet" href="ajoute.css" >

</head>
<body>
<?php  include 'C:/xampp1/htdocs/projects/navbar.php'; ?>

  
<div class="container">
<form method="POST" action="actionajoute.php">
      <div class="mb-3">
        <label  class="form-label">Photo de produit:</label>
        <input type="file" class="forg" name="file">
      
      </div>
      <div class="mb-3">
        <label  class="form-label">Nom produit:</label><br>
        <input type="text" class="form-control" name="produit">
        <br>
        <br>
      </div>
      <div class="mb-3">
        <label  class="form-label">Prix de produit:<br></label>
        <input type="nombre" class="form-control" name="prix">
      </div>
      <div class="mb-3">
        <p>Categorie :</p>
         <select   name="cate">
         <option value="0"><h4>Choisie la categorie:<h4></option>
         <option value="Habit traditionnel">Habit traditionnel</option>
         <option value="poterie">poterie</option>
         <option value="osier">osier</option>
         <option value="gypse">gypse</option>
         <option value="immobilier">immobilier</option>
         <option value="bois">bois</option>
         <option value="zellige">zellige</option>
         <option value="cuir">cuir</option>
         <option value="forge">forge</option>
        </select>
      </div>
      <br>
      <div class="mb-3">
        <label  class="form-label">description de produit :</label>
        <br>
        <textarea class="form-control" name="des"></textarea>
      </div>
      <br>
      <br>
      <div  class="btne">
       <button type="submit"  name="valid">Envoyer</button>
     </div>
  
</form>

</div>
<?php  include 'C:/xampp1/htdocs/projects/Fot4.php'; ?>
</body>
</html>
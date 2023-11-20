<?php require('./actionadmin.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="admin.css" >
   
  
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</head>
<body>

<?php  include 'C:\xampp1\htdocs\projects\navbar.php'; ?>
<div class="but">
<button ><a href="insertion.php" class="text-light">Ajoute un client</a></button>
</div>
<div class="container">
    
    
    <table class="table">
  <thead>
    <tr>
      <th>les</th>
      <th>Nome</th>
      <th>Prenom</th>
      <th>Gmail</th>
      <th>telephone</th>
      <th>Operation</th>
    </tr>
  </thead>
  <tbody>
      <?php
       
       while($qui = $getD->fetch()){
        
         ?>
              <?php  $id=$qui['id'] ?>
                 <tr>
                  <td><?=$qui['id']?></td>
                  <td><?=$qui['Nom']?></td>
                  <td><?=$qui['Prenom']?></td>
                  <td><?=$qui['email']?></td>
                  <td><?=$qui['telephone']?></td>
                  <td>
                    <div class="fgh">
                    <button ><a href="suppreme.php?id=<?=$id ?>" class="text-light">suppreme</a></button>
                    </div>
                  </td>
                </tr>                  
         <?php
       }
      ?>
      
</div>


</body>
</html>


<?php require('./affichemessage.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="message.css">
</head>
<body>
<?php  include 'C:\xampp1\htdocs\projects\navbar.php'; ?>
<br>
<br>
<br>


<table class="table">
  <thead>
    <tr>
      <th>Prénom de client</th>
      <th>Email de client</th>
      <th>téléphone  </th>
      <th>Message de client</th>
    </tr>
  </thead>
  <tbody>
<?php  while($message = $Z->fetch()){?>
         
         <div class="carder">
             <tr>
               <td><?=$message['prenom'];?></td>
               <td><?=$message['email'];?></td>
               <td><?=$message['telephone'];?></td>       
               <td><?=$message['monmessage'];?></td>    
              </tr>  
          </div>
    <?php }
    ?>
</body>
</html>
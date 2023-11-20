<?php require('./actionisert.php');?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="stylee.css">

</head>
<body>
<?php  include 'C:\xampp1\htdocs\projects\navbar.php'; ?>
<br>
<br>
<br>
  <div class="sd">
<?php if(isset($errorM)){
   echo '<br>' .$errorM .'<br>';
  
   }
 
  ?>
  </div> 
  <div class="insert">
   <form method="POST">
   
       <div class="Ad">
          <h2>Inscription</h2>
          <label>Nom :</label>
          <input type="text" name="nom" class="qs">
          <label>Prenom :</label>
          <input type="text" name="prenom" class="qs"><br>

          <label>Telephone :</label><br>
          <input type="tel" name="telephone" class="qs"><br>
          
          <label>Email :</label>
          <input type="email" name="email" class="qs"><br>

          <label>Mot de passe :</label>
          <input type="password" class="qs" id="mal" name="passe"><br>
          <input type="checkbox" class="ho" onclick="bocle()" onclick="arge()">Show Passwor
          <button type="submit" name="valid">Envoyer</button><br>
         <a href="login.php">Connexion</a>
        </div>  
      </div>
    </form>
    <script>
           function bocle(){
             var x = document.getElementById("mal");
             if(x.type === 'password'){
             x.type = "text";
            }else{
              x.type = 'password';
            }
           }
          
    </script>
    
   <?php  include 'C:/xampp1/htdocs/projects/Fot4.php'; ?>
</body>
</html>
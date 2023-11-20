<?php require('./actionlogin.php');?>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width= , initial-scale=1.0">
     <title>mente</title>
     <link rel="stylesheet" href="logine.css">
     
 </head>
 <body>
 <?php  include 'C:\xampp1\htdocs\projects\navbar.php'; ?>
 <br>
 <br>
 <br>
 <br>
 <div class="style">
   <h2>Connexion</h2>
     <form  method="POST">
          <div class="pass">
                 <div class="lnb">  
                    <label>Email :</label><br>
                    <input type="email" name="email" class="qa" placeholder="Exmple@gmail.com"><br><br>
                 </div><br>   
            <div class="lni">  
            <label>Mot de passe:</label>
            <input type="password" name="passe"  class="qs" id="mal" placeholder="Mode de passe">
          </div><br>

          <input type="checkbox" class="cd" onclick="myfonction()">Voir mot de passe
            <br> 
            <button type="submit" name="valid" class="az">Se connecter</button><br><br>
            <span>
              <a href="ubliermotpass.php">J'ai obliè mon mot de passe.</a><br><br>
              <a href="insertion.php">Cree un compte.</a>
             
            </span>
</div>
     </form>
     </div> 
     <script>
           function myfonction(){
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
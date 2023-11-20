<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oublier lmote passe</title>
    <link rel="stylesheet" href="logine.css">
</head>
<body>

<div class="style">
  <?php  
    if(isset($_POST['email'])){
      session_start();
      $_SESSION['email'] = $_POST['email'];
    }
if(isset($_POST['newpasse']) && isset($_POST['confirmpasse'])){
try{
   if(strcmp($_POST['newpasse'],$_POST['confirmpasse'])==0){
 $bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');
 $response = $bdd->exec("UPDATE clientt SET passw=".$_POST['newpasse']." where email =".$_SESSION['email']);
   header("./login.php");
}
   else{
     echo "mot de passe et confirm mot de passe n'est pas compatibles ";
   }
 }catch(Exception $e){   
 die('une erreur a ete trouve : ' .$e->getMessage());
 }
    }
  ?>
   <h2>Connexion</h2>
     <form  method="POST">
          <div class="pass">
                   
            
          <div class="lni">  
            <label>neuveau password:</label>
            <input type="password" name="newpasse"  class="qs" id="mal" placeholder="Mode de passe">
          </div><br>
          <div class="lnb">  
                    <label>Email :</label><br>
                    <input type="confirmpassword" name="confirmpsswd" class="qa" placeholder="Confirmer le Mode de passe"><br><br>
                 </div>
          
            <button type="submit" name="valid" class="az">Envoyer</button>
            <span>
              
             
            </span>
</div>
     </form>
     </div>
    
</body>
</html>
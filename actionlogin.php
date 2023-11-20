
<?php
  session_start();
  try{   
    $bdd = new PDO('mysql:host=localhost;dbname=artisant;charset=utf8;', 'root', '');
    }catch(Exception $e){
    die('une erreur a ete trouve : ' .$e->getMessage());
    }


    if(isset($_POST['valid'])){
        if(!empty($_POST['email']) AND !empty($_POST['passe'])){
            $email = htmlspecialchars($_POST['email']);
            $epassword = htmlspecialchars($_POST['passe']);

            $Exists = $bdd->prepare("SELECT * FROM clientt WHERE email = ?");
            $Exists->execute(array($email));

            if($Exists->rowCount() > 0){
                $ff = $Exists->fetch(); 

                if(password_verify($epassword, $ff['passw'])){
                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $ff['id'];
                    $_SESSION['Nom'] = $ff['Nom'];
                    $_SESSION['Prenom'] = $ff['Prenom'];
                    $_SESSION['telaphone'] = $ff['telephone'];
                    $_SESSION['email'] = $ff['email'];
                    $_SESSION['role'] = $ff['role'];

                    if(!strcmp($_SESSION['role'],"client")){
                        header('location:./mecont.php');
                    }else if(!strcmp($_SESSION['role'],"admin")){
                        header('location:./admin.php');
                       
                    }
                }

                else{
                    echo "<center>-les informations que vous avez saisies sont incorrectes</center>";
                }
               
            }else{
                $errorMsg = "le mot de passe ou gmail ne incorict";
                echo '<br>' .$errorMsg ;

            }
    
        }else{
            echo "<center>-remplier le mot de passe et email ...</center>";

           
        }
    
    }


    

?>
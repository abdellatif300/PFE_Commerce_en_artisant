<?php
session_start();
try{  
    $bdd = new PDO('mysql:host=localhost;dbname=artisant;', 'root', '');
    }catch(Exception $e){
    die('une erreur a ete trouve : ' .$e->getMessage());
    }
    if(isset($_POST['valid'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['telephone']) 
        && !empty($_POST['email']) && !empty($_POST['passe'])){
        
            $enom = htmlspecialchars($_POST['nom']);
            $eprenom = htmlspecialchars($_POST['prenom']);
            $etele = htmlspecialchars($_POST['telephone']);
            $eemail = htmlspecialchars($_POST['email']);
            $epassword = password_hash($_POST['passe'],PASSWORD_DEFAULT);

            $chech = $bdd->prepare("SELECT email FROM clientt WHERE email =?");
            $chech->execute(array($eemail));

            if($chech->rowCount() == 0){
                $isert = $bdd->prepare("INSERT INTO clientt(Nom, Prenom, telephone, email, passw)VALUES(?, ?, ?, ?, ?)");
                $isert->execute(array($enom , $eprenom, $etele, $eemail, $epassword)); 
                $getI = $bdd->prepare('SELECT id, Nom, Prenom, telephone, email FROM clientt WHERE Nom = ? AND Prenom = ? AND telephone = ? AND email = ?');
                $getI->execute(array($enom, $eprenom, $etele, $eemail));
                $user = $getI->fetch();
    
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $user['id'];
                $_SESSION['Nom'] = $user['Nom'];
                $_SESSION['Prenom'] = $user['Prenom'];
                $_SESSION['telaphone'] = $user['telephone'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role'];
                header('location:./mecont.php');
            }else{  
                $errorMsg = "le tilisateur deja inscrire donne le sete";
                echo '<br>' .$errorMsg .'<br>';
            
            }
        
        }else{
            $errorM = "remplier les information....";
        }
    
    }









?>
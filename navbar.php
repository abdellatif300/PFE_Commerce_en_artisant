<?php
$active  = $_SERVER['PHP_SELF'];
if(isset($_GET['d'])){
  session_unset();
  $errorMsg = "Vous avez bien déconnecter";
  header('location:./index.php');
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="styleo.css">
<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
     <img src="logot.jpg" alt="logo" >
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">
    
    <a href="index.php" class=
    <?php
    if(strpos($active, "index.php")==true){
     echo "active";
    }
     else{
          echo "inactive";
         
     }
    ?>
      >Accueil</a>
    <a href="recherche.php" 
    class=
    <?php
    if(strpos( $active , "recherche")==true){
     echo "active";
    }
     else{
          echo "inactive";
     }?>
    >Rechercher</a>
    <?php
      if(isset($_SESSION['auth']) && $_SESSION['auth']==true){
        ?>
        <a href="mecont.php" 
        class=
    <?php
    if(strpos($active,"mecont.php")==true){
     echo "active";
    }
     else{
          echo "inactive";
     }?>
        
        
        >Mon compte</a>
        <a href="?d" >Se déconnecter</a>
        <?php
      }else{
        ?>
        <a href="insertion.php" 
        class=
    <?php
    if(strpos($active , "insertion.php")==true){
     echo "active";
    }
     else{
          echo "inactive";
          
     }?>
        >S'inscrire</a>
        <a href="login.php" 
        class=
    <?php
    if(strpos($active , "login.php")==true){
     echo "active";
    }
     else{
          echo "inactive";     }?>
        >Se Connecter</a>
        <?php
      }
    ?>
    
    </div>
    
  
</div>

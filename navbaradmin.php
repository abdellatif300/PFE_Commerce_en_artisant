<?php
$active  = $_SERVER['PHP_SELF'];
if(isset($_GET['d'])){
  session_unset();
  $errorMsg = "Vous avez bien déconnecter";
  header('location:./index.php');
}
?>

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
  <a href="Acuielladmin.php" class=  
   <?php
    if(strpos($active, "/Acuielladmin.php")==true){
     echo "active";
    }
     else{
          echo "inactive";
         
     }
    ?>
    >Acuiell</a>
    <a href="admin.php" class=  
   <?php
    if(strpos($active, "/admin.php")==true){
     echo "active";
    }
     else{
          echo "inactive";
         
     }
    ?>
    >les clients</a>
    <a href="produitadmin.php" class=
    <?php
    if(strpos($active, "/produitadmin.php")==true){
     echo "active";
    }
     else{
          echo "inactive";
         
     }
    ?>
    >Produit</a>
    <a href="messagedeclient.php" class=
    <?php
    if(strpos($active, "message")==true){
     echo "active";
    }
     else{
          echo "inactive";
         
     }
    ?>
    >Message</a>
    <a href="?d" >Se déconnecter</a>
  </div>
  
</div>

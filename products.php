<?php 
session_start();
try{
    function connect() {
        return mysqli_connect("127.0.0.1", "root", null, "artisant");
    }
 }catch(Exception $e){   
 die('une erreur a ete trouve : ' .$e->getMessage());
 }
 include_once("./products-functions.php");

$products = getFilteredProducts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet"  href="habite.css">
</head>
<body>
<?php  include 'C:\xampp1\htdocs\projects\navbar.php'; ?>
<br>
<br>
<div class="contain">
    <?php 
    $i=0;
     foreach($products as $product): $i++; ?>
        

        
        <div class="carder">
                        <img src="./imag/<?=$product['photo']?>" alt="ii"> 
                         <h5 class="AZ">Nom produit : <?=$product['nproduit'];?></h5>
                         <h5 class="price">Prix : <?=$product['Prix'];  ?></h5>
                         <a href="plus.php?id=<?=$product['id']?>"><button>Plus de détails</button></a>
                         
        </div>
        
    <?php endforeach; 
    
    if($i==0){?>
     </div> 
        <div class="jj">
            Aucun produit trouvé....
        
    <?php } ?>
    

    </div>
    <?php  include 'C:\xampp1\htdocs\projects\Fot4.php'; ?>
    
</body>
</html>

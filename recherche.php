


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NoS1gnal" />
    <title>Recherche</title>
    <link rel="stylesheet" href="recherche.css">
</head>

<body>
<?php  include 'C:/xampp1/htdocs/projects/navbar.php'; ?>

<div class="gox">
    <form action="products.php" method="get">
        <div class="container">
        <h1> Recherche </h1>
            <div class="corp-formulaire">
                <div class="groupe">
                    <label>Nom de produit :</label>
                    <input type="text" name="nom" autocomplete="off">
                </div>
               
                
                <div class="groupe">
                    <label> Prix minimum en dirhams(DH):</label>
                    <input type="number" name="min">
                </div>
                <div class="groupe">
                    <label>Prix minimum en dirhams(DH):</label>
                    <input type="number" name="max">
                </div>
            </div>
        </div>
        <div class="pied-formulaire" name="valider" align="center">
            <button> Rechercher </button>
        </div>
    </form>
    </div>

    <?php  include 'C:/xampp1/htdocs/projects/Fot4.php'; ?>
</body>



</html>
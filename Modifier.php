<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NoS1gnal" />
    <title>Paramètre</title>
    <link rel="stylesheet" href="Modifier.css">
</head>

<body>
    <h1>Modifier mes informations</h1>

    <form action="parametre.php" method="get">

                <div class="corp-formulaire">
                    <label></label> <input name="id" value="<?= $_GET['id'] ?>" style="display:none"/><br />
                    <div class="groupe">
                        <label>Photo de produit:</label> <input type="file" name="bb" /><br />
                    </div>
                    <div class="groupe">
                        <label>Nom produit:</label> <input type="text" name="cc" /><br />
                    </div>
                    <div class="groupe">
                        <label>Prix de produit:</label> <input type="nombre" name="dd" /><br />
                    </div>


                    <div class="groupe">
                        <p>Categorie :</p>
                        <select name="ee">
                            <option value="0">
                                <h4>Choisie la categorie:<h4>
                            </option>
                            <option value="Habit traditionnel">Habit traditionnel</option>
                            <option value="poterie">poterie</option>
                            <option value="osier">osier</option>
                            <option value="gypse">gypse</option>
                            <option value="immobilier">immobilier</option>
                            <option value="bois">bois</option>
                            <option value="zellige">zellige</option>
                            <option value="cuir">cuir</option>
                            <option value="forge">forge</option>
                        </select>

                    </div>
                    <div class="groupe">
                        <label>description de produit :</label> <input type="text" name="ff" /><br />
                    </div>

                    <input class="mod" type="submit" value="Modifier" value="modifierB" />
            </form>
</body>

</html>
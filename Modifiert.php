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

    <form action="modefierinforclient.php" method="get">
        <div class="corp-formulaire">
            <div class="groupe">
                <label></label> <input type="text" name="aa" value="<?= $_GET['id'] ?>" style="display:none" /><br />
            </div>
            <div class="groupe">
                <label>Nom</label> <input type="text" name="bb" /><br />
            </div>
            <div class="groupe">
                <label>prénom</label> <input type="text" name="cc" /><br />
            </div>
            <div class="groupe">
                <label> Numéro de téléphone</label> <input type="text" name="dd" /><br />
            </div>
            <div class="groupe">
                <label>Email</label> <input type="text" name="ee" /><br />
            </div>
            <div class="groupe">
                <label>Mot de passe</label> <input type="text" name="ff" /><br />
            </div>
            <div class="groupe">
                <label>Photo</label> <input type="file" name="image" /><br />
            </div>
            <input class="mod" type="submit" value="Modifier" value="modifierB" />
    </form>
</body>

</html>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=artisant', 'root', '');

if (isset($_POST['envoi'])){
    extract($_POST);
    if (!empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['numero']) && !empty($_POST['message'])){
        $req = $bdd->prepare('INSERT INTO contacte(prenom,email,telephone,monmessage)VALUE(?,?,?,?)');
        $req ->execute(array($_POST['prenom'],$_POST['email'],$_POST['numero'],$_POST['message']));
        
        echo "Message envoyé";
    }
    else{
        echo "veuillez remplir tous les champs";
    }
}
?>


<!DOCTYPE html>
<html lang="fr"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NoS1gnal" />
    <title>Nous Contactez</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="contacter.css">
</head>

<body>


    <form method="POST"> 
    <h1> Contactez-nous</h1>
            <div class="separation">
            </div>
            <div class="corp-formulaire">
            <div class="gauche">
                    <div class="groupe">
                        <label>Prénom :</label>       
                        <input type="text" name="prenom" id="prenom" placeholder="Entrez votre Prénom" required>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="groupe">
                        <label>Email :</label>
                        <input type="email" name="email" id="email" placeholder="Entrez votre Email" required>
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="groupe">
                        <label>Votre téléphone</label>
                        <input type="text" name="numero" id="numero" placeholder="entrez votre numéro de téléphone" required>
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                </div>
                <div class="droite">
                    <div class="groupe">
                        <label>Message</label>
                        <textarea name="message" id="message" placeholder="Entrez votre message" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <div class="pied-formulaire">
            <input class="env" type="submit" value="Envoyer" name="envoi" />
            </div>
    </form>
</body>       
</html>

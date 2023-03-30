<?php?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ACCEUIL</title>
    <link rel="stylesheet" type="text/css" href="VUE/style.css">
    <link rel="stylesheet" type="text/css" href="VUE/css/bootstrap.css">
</head>
<body>

<div class="container">
    <!--<iframe src="VUE/menu.php" width="100%" height="60px" frameborder="0"></iframe>-->
    <div class="row">
        <div class=" col-3">
            <a href="index.php">
                <img src="VUE/logo.png" class="img-responsive d-inline-block align-top" alt="LOGO GSB" width="300">
            </a>
        </div>


        <div class="col-9">

            <?php require_once "VUE/menu.php";?>

        </div>
    </div>
</div>
<h1>Reste t'il des places </h1>

    <form method="POST" action="index?action=ajoutParticip">
        <input type="hidden" name="idAct" value="<?php echo $_GET['idAct'];?>">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="tel">Numéro de téléphone :</label>
        <input type="tel" id="tel" name="tel" required><br><br>

        <input type="submit" value="Envoyer">
    </form>

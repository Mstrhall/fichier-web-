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
                <img src="VUE/lelogo.png" class="img-responsive d-inline-block align-top" alt="LOGO GSB" width="300">
            </a>
        </div>


        <div class="col-9">

            <?php require_once "VUE/menu.php";?>

        </div>
    </div>
</div>
<h1>MEDICAMENT</h1>
<p>Chez GSB nous proposont une large game de médicaments pour les professionels de santé.
    Sur cette page vous trouverez toutes les information nessessaires sur vos médicaments. A l'aide des informations que nous vous fournissont
plus bas vous serez en capacité de voir quel médicament est contre-indiqué mais aussi les effets thérapeutiques et secondaires de chacun.</p>
<div>
    <?php require_once "MODELE/modeleGSB.php";

    getMedicaments();
    ?>
</div>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>

    </tr>
    </thead>

    <tbody>
    <?php foreach ($medicaments as $medicament): ?>
    <tr>
        <td><?php echo $medicament[0]; ?></td>
        <td><?php echo $medicament[1]; ?></td>
        <td><a href="index.php?action=pageEffets">Effets</a></td>
    </tr>
    <?php endforeach;?>
    <!-- Ajoutez autant de lignes que nécessaire -->
    </tbody>
</table>
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




    </div>
</div>
</div>

<h1>Activité</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>

    </tr>
    </thead>

    <tbody>
    <?php foreach ($activites as $activite): ?>
    <tr>
        <td><?php echo $activite[1]; ?></td>
        <td><?php echo $activite[2]; ?></td>
        <td><input type="link" name="complet" value= <a href="index.php?action=pageComplet">complet/></td>
    </tr>
    <?php endforeach;?>
    <!-- Ajoutez autant de lignes que nécessaire -->
    </tbody>
</table>





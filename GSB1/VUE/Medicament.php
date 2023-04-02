<?php?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ACCEUIL</title>

    <link rel="stylesheet" type="text/css" href="VUE/style.css">
    <link rel="stylesheet" type="text/css" href="VUE/stylereserver.css">
    <link rel="stylesheet" type="text/css" href="VUE/css/bootstrap.css">
</head>
<body>
<div class="container">
    <!-- Barre de navigation -->
    <div class="row">
        <div class=" col-3">
            <a href="index.php">
                <img src="VUE/lelogo.png" class="img-responsive d-inline-block align-top" alt="LOGO GSB" width="300">
            </a>
        </div>
        <div class="col-9">
            <?php require_once "VUE/menu.php";?>
            <!-- Le fichier menu.php est inclus ici -->
        </div>
    </div>
</div>

<h1>MEDICAMENT</h1>
<!-- Titre de la page -->
<div class="lab-info">
    <p>Chez GSB nous proposons une large gamme de médicaments pour les professionnels de santé.
        Sur cette page vous trouverez toutes les informations nécessaires sur vos médicaments. A l'aide des informations que nous vous fournissons,
        plus bas vous serez en mesure de voir quel médicament est contre-indiqué mais aussi les effets thérapeutiques et secondaires de chacun.</p>
</div>

<div>
    <?php require_once "MODELE/modeleGSB.php";
    // Inclut le fichier modeleGSB.php qui contient la fonction getMedicaments()
    getMedicaments(); // Appelle la fonction getMedicaments() pour récupérer les données
    ?>
</div>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th> </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($medicaments as $medicament): ?>
        <!-- Boucle sur le tableau $medicaments pour afficher les données -->
        <tr>
            <td><?php echo $medicament[0]; ?></td>
            <td><?php echo $medicament[1]; ?></td>
            <td>
                <a href="index.php?action=pageEffets&idMedoc=<?php echo $medicament[0];?>&nomMedoc=<?php echo $medicament[1];?>">
                    Effets
                </a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2023 GSB</p>
            </div>
            <div class="col-md-6">
                <p><a href="index.php?action=MENTION">mentions Legales</a></p>
            </div>
            <div class="col-md-6">
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/celian-laumond-595801234/" target="_blank">
                        <div class="circle-image">
                            <img src="VUE/celian.jfif" alt="Profil Celian Laumond">
                        </div>
                        <span>CELIAN LAUMOND</span>
                    </a>
                    <a href="https://www.linkedin.com/in/théo-gardais-aa5826242/" target="_blank">
                        <div class="circle-image">
                            <img src="VUE/theo.jfif" alt="Profil Théo Gardais">
                        </div>
                        <span>THEO GARDAIS</span>
                    </a>
                </div>
            </div>
        </div>
</footer>
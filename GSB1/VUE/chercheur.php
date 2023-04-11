<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Activité</title>
    <link rel="stylesheet" type="text/css" href="VUE/stylereserver.css">
    <link rel="stylesheet" type="text/css" href="VUE/style.css">
    <link rel="stylesheet" type="text/css" href="VUE/css/bootstrap.css">
</head>
<body>

<div class="container">
    <!-- Barre de navigation -->
    <div class="row">
        <div class=" col-3">
            <!-- Logo de la page -->
            <a href="index.php">
                <img src="VUE/lelogo.png" class="img-responsive d-inline-block align-top" alt="LOGO GSB" width="300">
            </a>
        </div>
        <div class="col-md-9 col-12">
            <!-- Inclure le fichier menu.php -->
            <?php require_once "VUE/menu.php";?>
        </div>
    </div>
</div>
<?php echo "le nombre de chercheur est de :"; echo $nbrchercheur;?>
<h1>Chercheur</h1>

<table class="custom-table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>

    </tr>
    </thead>

    <tbody>
    <!-- Boucle pour afficher chaque activité -->
    <?php foreach ($chercheur as $activite): ?>
        <tr>
            <!-- Afficher l'ID de l'activité -->
            <td><?php echo $activite[0]; ?></td>
            <!-- Afficher le nom de l'activité -->
            <td><?php echo $activite[1]; ?></td>
            <!-- Lien pour réserver cette activité -->

        </tr>
    <?php endforeach;?>
    <!-- Ajouter autant de lignes que nécessaire pour afficher toutes les activités -->
    </tbody>
</table>

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
<?php?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ACCEUIL</title>
    <link rel="stylesheet" type="text/css" href="VUE/stylereserver.css">
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
<h1>Reserver </h1>
<div class="container1">
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
</div>
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
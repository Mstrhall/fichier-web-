<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Informations sur un médicament</title>
    <link rel="stylesheet" type="text/css" href="VUE/style.css">
    <link rel="stylesheet" type="text/css" href="VUE/css/bootstrap.css">
</head>
<body>
<div class="container">
    <!-- Inclusion du menu -->
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

    <!-- Affichage des informations sur le médicament -->
    <h1>Informations sur un médicament</h1>
    <div class="lab-info">
        <h2>Nom médicament :</h2>
        <p><?php echo $nomMedoc ?></p>
        <h2>Effet thérapeutique(s) :</h2>
        <?php foreach ($effetsTerap as $unEffetTerap){ ?>
            <div class="text-centrer"> <?php echo $unEffetTerap[0] . " " . $unEffetTerap[1]; ?></div>
            <br>
        <?php } ?>
        <h2>Effet secondaire(s)</h2>
        <?php foreach ($effetsSecond as $unEffetSecond){ ?>
            <div class="text-centrer"> <?php echo $unEffetSecond[0] . " " . $unEffetSecond[1]; ?></div>
            <br>
        <?php } ?>
    </div>
</div>
</body>
</html>


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
    </div>
</footer>

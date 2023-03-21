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




<h1> ACCEUIL </h1>
<div class="lab-info">
    <h2>Notre Laboratoire</h2>
    <p>Le laboratoire GSB est un centre de recherche spécialisé dans le domaine de la biologie moléculaire. Nous travaillons sur des projets de recherche variés, allant de l'étude des maladies génétiques rares à la découverte de nouveaux médicaments.</p>
    <p>Nous sommes fiers de notre équipe de chercheurs, qui est composée de scientifiques de renommée mondiale ayant une expérience significative dans le domaine de la biologie moléculaire. Notre laboratoire est équipé des dernières technologies et nous sommes engagés dans une recherche de pointe.</p>
</div>
<h2> NOS DERNIER BREVET </h2>
<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="VUE/gelules.avif" class="slide-img">
    </div>
    <div class="mySlides fade">
        <img src="VUE/medicament.avif" class="slide-img">
    </div>
    <div class="mySlides fade">
        <img src="VUE/doli.avif" class="slide-img">
    </div>

</div>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    function plusSlides(n) {
        slideIndex += n;
        showSlides(slideIndex);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");

        // si l'indice est supérieur au nombre d'images, alors on repart au début
        if (n > slides.length) {slideIndex = 1}
        // si l'indice est inférieur à 1, on passe à la dernière image
        if (n < 1) {slideIndex = slides.length}

        // On cache toutes les images
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        // On désactive tous les boutons des indicateurs
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        // On affiche l'image correspondante
        slides[slideIndex-1].style.display = "block";
        // On active le bouton correspondant à l'indicateur
        dots[slideIndex-1].className += " active";
    }
</script>

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
                <a href="https://www.linkedin.com/in/celian-laumond-595801234/">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/LinkedIn_Logo.svg/1024px-LinkedIn_Logo.svg.png" alt="Logo LinkedIn 1" width="30">
                    <span>CELIAN LAUMOND </span>
                </a>
                <a href="https://www.linkedin.com/in/théo-gardais-aa5826242/">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/LinkedIn_Logo.svg/1024px-LinkedIn_Logo.svg.png" alt="Logo LinkedIn 2" width="30">
                    <span>THEO GARDAIS</span>
                </a>
            </div>
        </div>
    </div>
</footer>
</html>
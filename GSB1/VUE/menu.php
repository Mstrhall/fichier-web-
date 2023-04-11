<!-- Cette balise représente la barre de navigation du site web -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- On inclut la feuille de style bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!-- Le bouton de menu déroulant est affiché lorsque l'écran est trop petit pour afficher les liens -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Le contenu de la barre de navigation, qui sera affiché dans la zone de déroulement -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

            <!-- Les liens de la barre de navigation -->
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=ACTIVITE">Activité</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=MEDOC">Médicament</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=chercheur">chercheur</a>
            </li>
        </ul>
    </div>
</nav>
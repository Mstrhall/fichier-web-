<?php
require_once "MODELE/modeleGSB.php";

require_once "CONTROLEUR/Controleur.php";

if(empty($_GET["action"]))
    appelAcceuil();
elseif ($_GET["action"]=="MENTION")
    appelMENTION();
elseif($_GET["action"]=="MEDOC")
    appelMEDOC();
elseif ($_GET["action"]=="chercheur")
    appelChercheur();

elseif($_GET["action"]=="ACTIVITE")
    appelACTIVITE();

elseif($_GET["action"]=="pageEffets"){
    $idMedoc = $_GET['idMedoc'];
    $nomMedoc = $_GET['nomMedoc'];
    appelEffets();
}

elseif($_GET["action"]=="pageReserver")
{
     $idAct = $_GET["idAct"];   
     appelReserver();
}

elseif($_GET["action"]=="ajoutParticip")
{
  
    traitementParticipant();}
<?php
// Cette fonction permet d'appeler la page d'accueil
function appelAcceuil(){
    require_once "VUE/Acceuil.php";
}

// Cette fonction permet d'appeler la page de mentions légales
function appelMENTION(){
    require_once "VUE/MentionsLegales.php";
}

// Cette fonction permet d'appeler la page des médicaments
function appelMEDOC(){
    $medicaments = getMedicaments(); // Récupération des médicaments depuis la base de données
    require_once "VUE/Medicament.php";
}

// Cette fonction permet d'appeler la page des activités
function appelACTIVITE(){
    $activites=getActivite(); // Récupération des activités depuis la base de données
    require_once "VUE/activite.php";
}

// Cette fonction permet d'appeler la page de réservation
function appelReserver(){
    // $idAct=$_GET['idAct'];
    require_once "VUE/reserver.php";
}

// Cette fonction permet de traiter le formulaire de participation à une activité
function traitementParticipant(){
    session_start();
    $adresse=$_POST['email'];

    /* $ParticipExist=getVerifParticipant($adresse);
    var_dump($ParticipExist);
    if($ParticipExist){
        $_SESSION['idParticipant']=getparticipant($adresse);
        insertpartciper($idAct,$idParticipant);
    }

    else{*/
    insertparticipant($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['tel']);
    $idParticipant=getparticipant($adresse);
    insertpartciper($_POST['idAct'],$idParticipant);
    // }

    //$idParticipant=getpartcipant($adresse);
}

// Cette fonction permet d'appeler la page des effets secondaires d'un médicament
function appelEffets(){
    $effetsSecond=get_effet_secondaire($_GET['idMedoc']); // Récupération des effets secondaires depuis la base de données
    $effetsTerap=geteffetherapeutique($_GET['idMedoc']); // Récupération des effets thérapeutiques depuis la base de données
    $nomMedoc=$_GET['nomMedoc'];
    require_once "VUE/effets.php";
}

function appelDetailActivite(){
    $activite=getVerifParticipant();
}

function verifparticipant($sontadresse){
    $verifparticipant=getVerifParticipant($sontadresse);

    return $verifparticipant;
}

// Cette fonction permet de récupérer les effets secondaires d'un médicament
function getEffetsecondaire($iddumedoc){
    $effetSecond=get_effet_secondaire($iddumedoc);
    return$effetSecond;
}

// Cette fonction permet de récupérer les effets thérapeutiques d'un médicament
function getEfftherapeutique($iddumedoc){
    $effetTherap=geteffetherapeutique($iddumedoc);
    return $effetTherap;
}

// Cette fonction permet d'insérer un participant dans la base de données
function insertparticipants($nom,$prenom,$adresse,$num){
    insertparticipant($nom,$prenom,$adresse,$num);
}

// Cette fonction permet d'insérer la participation d'un utilisateur à une activité dans la base de données
function insertparticiper($idActviter,$idParticiper){
    session_start();
    // insertParticiper($idActviter,$_SESSION['idParticipant']);
}


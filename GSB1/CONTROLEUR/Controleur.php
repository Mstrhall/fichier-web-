<?php
function appelAcceuil(){
    require_once "VUE/Acceuil.php";
}
function appelMENTION(){
    require_once "VUE/MentionsLegales.php";
}
function appelMEDOC(){
    $medicaments = getMedicaments();
    require_once "VUE/Medicament.php";
}

function appelACTIVITE(){
    $activites=getActivite();
    require_once "VUE/activite.php";

}

function appelReserver(){
    $idAct=$_GET['idAct'];
    getVerfiParticipant($idAct);
    require_once "VUE/reserver.php";

}

function appelEffets(){
    $effetsSecond=geteffetsecondaire();
    $effetsTerap=select_effets_therapeutiques();
    require_once "VUE/effets.php";
}

function appelDetailActivite(){
    $activite=getVerifParticipant();
}

function verifparticipant($sontadresse){
    $verifparticipant=getVerifParticipant($sontadresse);

    return $verifparticipant;
}
function  getEffetsecondaire($iddumedoc){
    $medicament=geteffesecondaire($iddumedoc);
    return$medicament;
}
function getEfftherapeutique($iddumedoc){
    $medicament=geteffetherapeutique($iddumedoc);
    return $medicament;
}

function insertparticipants($nom,$prenom,$adresse,$num){
    insertparticipant($nom,$prenom,$adresse,$num);
}

function insertparticiper($idActviter,$idParticiper){
    insertParticiper($idActviter,$idParticiper);

}

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
    require_once "VUE/activité.php";

}

function appelDetailActivite(){
    $activite=getVerifParticipant()
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

function insertParticiper($idActviter,$idParticiper){
    insertParticiper($idActviter,$idParticiper);

}
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
   // $idAct=$_GET['idAct'];
    require_once "VUE/reserver.php";   
}

function traitementParticipant(){
    session_start();
   $adresse=$_POST['email'];
  

  /*  $ParticipExist=getVerifParticipant($adresse);
     var_dump($ParticipExist);
    if($ParticipExist){
        $_SESSION['idParticipant']=getparticipant($adresse);
        insertpartciper($idAct,$idParticipant);
    }

    else{*/
        insertparticipant($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['tel']);
        $idParticipant=getparticipant($adresse);
        insertpartciper($_POST['idAct'],$idParticipant);
  //  }
    
    //$idParticipant=getpartcipant($adresse);
    

 }
function appelEffets(){
    $effetsSecond=get_effet_secondaire($_GET['idMedoc']);
    $effetsTerap=geteffetherapeutique($_GET['idMedoc']);
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
function  getEffetsecondaire($iddumedoc){
    $effetSecond=get_effet_secondaire($iddumedoc);
    return$effetSecond;
}
function getEfftherapeutique($iddumedoc){
    $effetTherap=geteffetherapeutique($iddumedoc);
    return $effetTherap;
}

function insertparticipants($nom,$prenom,$adresse,$num){
    insertparticipant($nom,$prenom,$adresse,$num);
}

function insertparticiper($idActviter,$idParticiper){
    session_start();
   // insertParticiper($idActviter,$_SESSION['idParticipant']);

}

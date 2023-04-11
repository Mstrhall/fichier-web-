<?php
// Fonction d'initialisation du client Soap
function init()
{
    $url = 'https://localhost:44306/WebService1.asmx?WSDL'; // URL du service web à appeler

    $option = array(
        'cache_wsdl' => 0, // Désactiver le cache du WSDL pour toujours récupérer la dernière version du service
        'trace' => 1, // Activer le mode trace pour faciliter le débogage en cas de problème
        'stream_context' => stream_context_create(array(
            'ssl' => array(
                'verify_peer' => false, // Ne pas vérifier le certificat du serveur distant
                'verify_peer_name' => false, // Ne pas vérifier le nom du serveur distant
                'allow_self_signed' => true // Autoriser les certificats auto-signés
            )
        ))
    );

    $client = new SoapClient($url, $option); // Création d'une nouvelle instance de la classe SoapClient avec les options précédentes

    return $client; // Renvoie l'objet SoapClient initialisé
}

// Fonction pour récupérer les médicaments depuis le service web
function getMedicaments()
{
    $client = init(); // Initialise le client Soap

    $res = $client->select_medicaments(); // Appelle la méthode "select_medicaments" du service web
    $lesRes = $res->select_medicamentsResult->string; // Récupère les résultats de la méthode appelée sous forme de tableau de chaînes de caractères
    $tab = array();

    for ($i = 0; $i < 2; $i++) { // Pour les 2 premiers résultats seulement
        $tab[$i] = explode(";", $lesRes[$i]); // Sépare chaque chaîne de caractères en utilisant le séparateur ";"
    }
    return $tab; // Renvoie le tableau des médicaments avec leurs informations
}

// Fonction pour récupérer les activités depuis le service web
function getActivite()
{
    $client=init(); // Initialise le client Soap

    $res=$client->select_activites(); // Appelle la méthode "select_activites" du service web
    $lesRes=$res->select_activitesResult->string; // Récupère les résultats de la méthode appelée sous forme de tableau de chaînes de caractères
    $tab=array();

    for ($i=0;$i<sizeof($lesRes);$i++){ // Pour chaque résultat
        $tab[$i]=explode(";",$lesRes[$i]); // Sépare chaque chaîne de caractères en utilisant le séparateur ";"
    }
    return $tab; // Renvoie le tableau des activités avec leurs informations
}
function countChercheur()
{
    $client=init(); // Initialise le client Soap

    $res=$client->CountChercheur(); // Appelle la méthode "select_activites" du service web
    $lesRes=$res->CountChercheurResult;
    return $lesRes;
}
function getChercheur()
{
    $client=init(); // Initialise le client Soap

    $res=$client->select_Chercheur(); // Appelle la méthode "select_activites" du service web
    $lesRes=$res->select_chercheurResult->string; // Récupère les résultats de la méthode appelée sous forme de tableau de chaînes de caractères
    $tab=array();

    for ($i=0;$i<sizeof($lesRes);$i++){ // Pour chaque résultat
        $tab[$i]=explode(";",$lesRes[$i]); // Sépare chaque chaîne de caractères en utilisant le séparateur ";"
    }
    return $tab; // Renvoie le tableau des activités avec leurs informations
}

// Fonction pour vérifier la participation d'un utilisateur
function getVerifParticipant($uneAdresse)
{
    $parameters=$uneAdresse; // Adresse email de l'utilisateur à vérifier
    $client=init(); // Initialise le client Soap

    $res=$client->verifParticipant($parameters); // Appelle la méthode "verifParticipant" du service web avec l'adresse email en paramètre
    $res=$res->verifParticipantResult; // Récupère le résultat sous forme de booléen (true ou false)
    return $res;
}
function getparticipant($uneAdresse){
    $parameters=array('adresseemail'=>$uneAdresse);
    $client=init();
    $res=$client->select_paticipant($parameters);
    $res=$res->select_paticipantResult;//possibilité de rajouter fleche boolean

    return $res;
}// Fonction qui permet de récupérer les effets secondaires d'un médicament
function get_effet_secondaire($iddumedoc)
{
    $parameters = array('unIdMedoc' => $iddumedoc);
    $client = init(); // initialisation du client SOAP
    $res = $client->select_effets_secondaire($parameters);
    $lesRes = $res->select_effets_secondaireResult->string; // récupération des résultats sous forme de tableau de chaînes de caractères
    $tab = array();
    for ($i = 0; $i < sizeof($lesRes); $i++) {
        $tab[$i] = explode(";", $lesRes[$i]); // on découpe chaque chaîne de caractères en utilisant ";" comme séparateur et on stocke les résultats dans un tableau
    }
    return $tab;
}

// Fonction qui permet de récupérer les effets thérapeutiques d'un médicament
function geteffetherapeutique($iddumedoc)
{
    $parameters = array('unIdMedoc' => $iddumedoc);
    $client = init(); // initialisation du client SOAP
    $res = $client->select_effets_therapeutiques($parameters);
    $lesRes = $res->select_effets_therapeutiquesResult->string; // récupération des résultats sous forme de tableau de chaînes de caractères
    $tab = array();
    for ($i = 0; $i < sizeof($lesRes); $i++) {
        $tab[$i] = explode(";", $lesRes[$i]); // on découpe chaque chaîne de caractères en utilisant ";" comme séparateur et on stocke les résultats dans un tableau
    }
    return $tab;
}

// Fonction qui permet d'insérer un participant dans la base de données
function insertparticipant($lenom, $leprenom, $ladresse, $lenum)
{
    $parameters = array('unNom' => $lenom, 'unPrenom' => $leprenom, 'uneAdresse' => $ladresse, 'unNum' => $lenum);
    $client = init(); // initialisation du client SOAP
    $res = $client->insert_participant($parameters);
    // $lesRes=$res->insert_participantResponse;

    // echo "j'ai bien inséré le participant :".$lenom;
}

// Fonction qui permet d'insérer la participation d'un participant à une activité dans la base de données
function insertpartciper($idactiviter, $idparticpant)
{
    $parameters = array('unIdAct' => $idactiviter, 'unIdparticipant' => $idparticpant);
    $client = init(); // initialisation du client SOAP
    $res = $client->insert_participer($parameters);
    // $lesRes=$res->insert_participerResponse;

    // echo $lesRes;
}


?>
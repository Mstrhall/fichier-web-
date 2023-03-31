<?php
function init()
{
    $url = 'https://localhost:44382/WebService1.asmx?WSDL';

    $option = array(
        'cache_wsdl' => 0,
        'trace' => 1,
        'stream_context' => stream_context_create(array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        ))
    );

    $client = new SoapClient($url, $option);

    return $client;
}

function getMedicaments()
{
    $client = init();

    $res = $client->select_medicaments();
    $lesRes = $res->select_medicamentsResult->string;
    $tab = array();

    for ($i = 0; $i < 3; $i++) {
        $tab[$i] = explode(";", $lesRes[$i]);
    }
    return $tab;
}

function getActivite()
{
    $client=init();
    $res=$client->select_activites();
    $lesRes=$res->select_activitesResult->string;
    $tab=array();
    for ($i=0;$i<sizeof($lesRes);$i++){
        $tab[$i]=explode(";",$lesRes[$i]);

    }
    return $tab;
}


function getVerifParticipant($uneAdresse)
{
    $parameters=$uneAdresse;
    $client=init();
    $res=$client->verifParticipant($parameters);
    $res=$res->verifParticipantResult;//possibilité de rajouter fleche boolean
    var_dump($res);
    return $res;
}
function getparticipant($uneAdresse){
    $parameters=array('adresseemail'=>$uneAdresse);
    $client=init();
    $res=$client->select_paticipant($parameters);
    $res=$res->select_paticipantResult;//possibilité de rajouter fleche boolean

    return $res;
}
function get_effet_secondaire($iddumedoc)
{
    $parameters=array('unIdMedoc'=>$iddumedoc);
    $client=init();
    $res=$client->select_effets_secondaire($parameters);
    $lesRes=$res->select_effets_secondaireResult->string;
    $tab=array();
    for($i=0;$i<sizeof($lesRes);$i++){
        $tab[$i]=explode(";",$lesRes[$i]);
    }
    return $tab;
}

function geteffetherapeutique($iddumedoc)
{
  
   $parameters=array('unIdMedoc'=>$iddumedoc);
      $client=init();
    $res=$client->select_effets_therapeutiques($parameters);
    $lesRes=$res->select_effets_therapeutiquesResult->string;
	    $tab=array();
    for($i=0;$i<sizeof($lesRes);$i++){
        $tab[$i]=explode(";",$lesRes[$i]);
    }
     return $tab;
}

function insertparticipant($lenom,$leprenom,$ladresse,$lenum)
{
    $parameters=array('unNom'=>$lenom,'unPrenom'=>$leprenom,'uneAdresse'=>$ladresse,'unNum'=>$lenum);
    $client=init();
    $res=$client->insert_participant($parameters);
    // $lesRes=$res->insert_participantResponse;

//    echo "j'ai bien inserer le partcipant :".$lenom;
}

function insertpartciper($idactiviter,$idparticpant)
{
    $parameters=array('unIdAct'=>$idactiviter,'unIdparticipant'=>$idparticpant);
    $client=init();
    $res=$client->insert_participer($parameters);
    // $lesRes=$res->insert_participerResponse;

    //  echo $lesRes;
}


?>

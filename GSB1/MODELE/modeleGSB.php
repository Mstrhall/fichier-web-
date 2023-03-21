<?php

function init(){
    $url = 'https://localhost:44306/WebService1.asmx?WSDL';

    $option = array(
        'cache_wsdl' => 0,
        'trace' => 1,
        'stream_context' => stream_context_create(array(
            'ssl' => array(
                'verify_peer'=>false,
                'verify_peer_name'=>false,
                'allow_self_signed'=>true
            )
        ))
    );

    $client = new SoapClient($url, $option);

    return $client;
}
function getMedicaments(){
    $client=init();

    $res=$client->select_medicaments();
    $lesRes=$res->select_medicamentsResult->string;
    $tab=array();

    for($i=0;$i<3;$i++){
        $tab[$i]=explode(";",$lesRes[$i]);
    }
    var_dump($tab);
}

?>
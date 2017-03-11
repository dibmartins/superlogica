<?php

try{

    $api = require_once('api.php');

    $clientes = new \Superlogica\Clientes($api);

    $response = $clientes->put([
        'ID_SACADO_SAC'         => 9,
        'ST_NOME_SAC'           => 'Mariana Abreu',
        'ST_NOMEREF_SAC'        => 'marifmarra',
        'ST_DIAVENCIMENTO_SAC'  => '12'
    ]);

    echo '<pre>';
    print_r($response);
}
catch(\Superlogica\Exception $e){
    
    var_dump($e);
}
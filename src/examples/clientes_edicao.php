<?php

try{

    $api = require_once('api.php');

    $clientes = new \Superlogica\Clientes($api);

    $response = $clientes->put([
        'ST_NOME_SAC'           => 'Cliente 5',
        'ST_NOMEREF_SAC'        => 'Nome Fantasia 5',
        'ST_DIAVENCIMENTO_SAC'  => '20',
    ]);

    echo '<pre>';
    print_r($response);
}
catch(\Exception $e){
    
    echo $e->getMessage();
}
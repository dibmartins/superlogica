<?php

try{

    $api = require_once('api.php');

    $clientes = new \Superlogica\Clientes($api);

    $response = $clientes->put([
        'id'                    => 9,
        'ST_NOME_SAC'           => 'Diego Botelho Martins',
        'ST_NOMEREF_SAC'        => 'Dibmartins',
        'ST_DIAVENCIMENTO_SAC'  => '10'
    ]);

    echo '<pre>';
    print_r($response);
}
catch(\Exception $e){
    
    echo $e->getMessage();
}
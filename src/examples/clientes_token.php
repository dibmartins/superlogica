<?php

try{

    $api = require_once('api.php');

    $clientes = new \Superlogica\Clientes($api);

    $response = $clientes->token(['email' => 'dibmartinsaaa@gmail.com']);

    echo '<pre>';
    print_r($response);
}
catch(\Superlogica\Exception $e){
    
    var_dump($e);
}
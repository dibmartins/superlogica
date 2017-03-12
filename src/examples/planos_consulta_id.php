<?php

try{

    $api = require_once('api.php');

    $planos = new \Superlogica\Planos($api);

    $response = $planos->get(['id' => 2]);

    echo '<pre>';
    print_r($response);
}
catch(\Superlogica\Exception $e){
    
    var_dump($e);
}
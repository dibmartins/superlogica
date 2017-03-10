<?php

require_once('../vendor/autoload.php');

$api = new \Superlogica\Api('3Juh5oflLJEO', 'fRtGarWJ4aCT');

$clientes = new \Superlogica\Clientes($api);

$response = $clientes->post([
    'ST_NOME_SAC'           => 'Cliente 5',
    'ST_NOMEREF_SAC'        => 'Nome Fantasia 5',
    'ST_DIAVENCIMENTO_SAC'  => '20',
]);

echo '<pre>';
print_r($response);
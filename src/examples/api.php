<?php

require_once('../../vendor/autoload.php');

// Obtenha os tokens de teste em: http://superlogica.com/dev/trial/
return new \Superlogica\Api('https://api.superlogica.net/v2/financeiro/', 'your_app_token', 'your_access_token', 120);
<?php

namespace Superlogica;

/**
 * Endpoint de clientes
 * 
 * @link http://superlogica.com/developers/api/#!/Clientes.json
 * @author Diego Botelho <dibmartins@gmail.com>
 * @copyright (c) 2017
 */
class Clientes extends Endpoint{
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'clientes';
    }    
}
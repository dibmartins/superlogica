<?php

namespace Superlogica;

/**
 * Endpoint de planos
 * 
 * @link http://superlogica.com/developers/api/#!/Planos.json
 * @author Diego Botelho <dibmartins@gmail.com>
 * @copyright (c) 2017
 */
class Planos extends Endpoint{
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'planos';
    }    
}
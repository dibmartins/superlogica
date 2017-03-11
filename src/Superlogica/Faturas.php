<?php

namespace Superlogica;

/**
 * Endpoint de faturas
 * 
 * @link http://superlogica.com/developers/api/#!/Faturas.json
 * @author Diego Botelho <dibmartins@gmail.com>
 * @copyright (c) 2017
 */
class Faturas extends Endpoint{
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'faturar';
    }    
}
<?php

namespace Superlogica;

/**
 * Endpoint de cobranças
 * 
 * @link http://superlogica.com/developers/api/#!/Cobrancas.json
 * @author Diego Botelho <dibmartins@gmail.com>
 * @copyright (c) 2017
 */
class Cobrancas extends Endpoint{
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'cobranca';
    }    
}
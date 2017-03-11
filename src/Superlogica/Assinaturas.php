<?php

namespace Superlogica;

/**
 * Endpoint de assinaturas
 * 
 * @link http://superlogica.com/developers/api/#!/Assinaturas.json
 * @author Diego Botelho <dibmartins@gmail.com>
 * @copyright (c) 2017
 */
class Assinaturas extends Endpoint{
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'assinaturas';
    }    
}
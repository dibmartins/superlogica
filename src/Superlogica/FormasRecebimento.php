<?php

namespace Superlogica;

/**
 * Endpoint de formas de recebimento
 * 
 * @link http://superlogica.com/developers/api/#!/Formasrecebimentos.json
 * @author Diego Botelho <dibmartins@gmail.com>
 * @copyright (c) 2017
 */
class FormasRecebimento extends Endpoint{
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'formasrecebimentos/bancoscomdebito';
    }    
}
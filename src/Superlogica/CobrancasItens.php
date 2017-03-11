<?php

namespace Superlogica;

/**
 * Endpoint de itens de cobrança
 * 
 * @link http://superlogica.com/developers/api/#!/Cobrancaitens.json
 * @author Diego Botelho <dibmartins@gmail.com>
 * @copyright (c) 2017
 */
class CobrancaItens extends Endpoint{
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'cobrancaitens';
    }    
}
<?php

namespace Superlogica;

/**
 * Endpoint de checkout (cadastrar um cliente assinando um plano)
 * 
 * @link http://superlogica.com/developers/api/#!/Checkout.json
 * @author Diego Botelho <dibmartins@gmail.com>
 * @copyright (c) 2017
 */
class Checkout extends Endpoint{
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'checkout';
    }    
}
<?php

namespace Superlogica;

class Faturas extends Endpoint{
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'faturar';
    }    
}
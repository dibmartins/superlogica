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
    
    /**
     * Consulta por registros no endpoint
     * 
     * @param array $data = null Parâmetros da requisição
     * @return object Resposta do serviço
     */
    public function token($data = null){
        
        try{
            
            return $this->api->execute('get', 'clientes/token', $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }
}
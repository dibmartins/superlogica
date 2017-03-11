<?php

namespace Superlogica;

abstract class Endpoint {
    
    protected $api;

    /**
     * @return string o nome do endpoint da model 
     */
    abstract public function getEndpoint();

    /**
     * Construtor.
     * 
     * @param string|int $identificador Identificador do sacado
     * @param array $data Parâmetros de cadastro de cliente
     * @return string Resposta do serviço
     * @throws Exception
     */
    public function __construct(\Superlogica\Api $api){

        $this->api = $api;
    }

    /**
     * Cria um novo cliente
     * 
     * @param string|int $identificador Identificador do sacado
     * @param array $data Parâmetros de cadastro de cliente
     * @return string Resposta do serviço
     */
    public function post($data = null){
        
        try{
            
            return $this->api->execute('post', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Cria um novo cliente
     * 
     * @param string|int $identificador Identificador do sacado
     * @param array $data Parâmetros de cadastro de cliente
     * @return string Resposta do serviço
     */
    public function put($data = null){
        
        try{
            
            return $this->api->execute('put', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Cria um novo cliente
     * 
     * @param string|int $identificador Identificador do sacado
     * @param array $data Parâmetros de cadastro de cliente
     * @return string Resposta do serviço
     */
    public function get($data = null){
        
        try{
            
            return $this->api->execute('get', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Cria um novo cliente
     * 
     * @param string|int $identificador Identificador do sacado
     * @param array $data Parâmetros de cadastro de cliente
     * @return string Resposta do serviço
     */
    public function delete($data = null){
        
        try{
            
            return $this->api->execute('delete', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }    
}
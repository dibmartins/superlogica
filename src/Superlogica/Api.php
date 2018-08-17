<?php

namespace Superlogica;

/**
 * Responsável pela comunicação com a api superlogica
 * 
 * @author Diego Botelho <dibmartins@gmail.com>
 * @author Michel Teixeira <michel@odig.net>
 * @copyright (c) 2017-2018
 */
class Api {
    
    private $curl;
    private $url;
    private $appToken;
    private $accessToken;
    private $timeout;
    private $headers = array();

    /**
     * Adiciona um item no Header
     * 
     * @param string $key
     * @param string $value
     */
    public function addHeader($key, $value){
        
        if(!empty($key) && !empty($value)){
            $this->headers[$key] = $value;
        }
    }

    /**
     * Construtor
     * 
     * @param string $url
     * @param string $appToken
     * @param string $accessToken
     * @param int $timeout
     */
    public function __construct($url, $appToken, $accessToken, $timeout){

        $this->curl        = new \Curl\Curl();
        $this->url         = $url;
        $this->appToken    = $appToken;
        $this->accessToken = $accessToken;
        $this->timeout     = $timeout;

        $this->addHeader('Content-Type' , 'application/x-www-form-urlencoded');
        $this->addHeader('app_token'    , $this->appToken);
        $this->addHeader('access_token' , $this->accessToken);
    }

    /**
     * Executa um endpoint
     * 
     * @param string $action post|put|get|delete
     * @param string endpoint
     * @param array $data Parâmetros da requisicao
     * @param array $seconds Tempo em segundos para esperar a resposta do servidor
     * @throws \Exception
     * @return string Resposta do serviço
     */
    public function execute($action, $endpoint, $data){
        
        try{
            
            $this->curl->setOpt(CURLOPT_RETURNTRANSFER , true);
            $this->curl->setOpt(CURLOPT_FOLLOWLOCATION , true);
            $this->curl->setOpt(CURLOPT_SSL_VERIFYPEER , false);
            $this->curl->setOpt(CURLOPT_SSL_VERIFYHOST , false);
            
            foreach($this->headers as $key => $value){
                
                $this->curl->setHeader($key, $value);
            }

            $this->curl->setConnectTimeout($this->timeout);

            $this->curl->$action($this->url . $endpoint, $data);

            if($this->curl->error) {

                throw new \Superlogica\Exception($this->curl);
            }

            return $this->curl->response;
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }
}
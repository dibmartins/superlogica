<?php

namespace Superlogica;

class Api {
    
    private $curl;
    private $url;
    private $appToken;
    private $accessToken;

    /**
     * Construtor
     * 
     * @param string $appToken
     * @param string $accessToken
     */
    public function __construct($appToken, $accessToken){

        $this->curl        = new \Curl\Curl();
        $this->url         = 'https://api.superlogica.net/v2/financeiro/';
        $this->appToken    = $appToken;
        $this->accessToken = $accessToken;

        $this->curl->setOpt(CURLOPT_RETURNTRANSFER , true);
        $this->curl->setOpt(CURLOPT_FOLLOWLOCATION , true);
        $this->curl->setOpt(CURLOPT_SSL_VERIFYPEER , false);
        $this->curl->setOpt(CURLOPT_SSL_VERIFYHOST , false);
        $this->curl->setOpt(CURLOPT_HTTPHEADER     , $this->getHeader());
    }

    /**
     * Retorna a url base da api a ser concatenada com os endpoints
     * 
     * @return string
     */
    public function getUrl(){

        return $this->url;
    }

    /**
     * Formata o header da requisição
     * 
     * @param string|int $identificador Identificador do sacado
     * @param array $data Parâmetros de cadastro de cliente
     * @return array
     */
    public function getHeader(){
        
        return [
            'Content-Type: application/x-www-form-urlencoded',
            "app_token: $this->appToken",
            "access_token: $this->accessToken",
        ];
    }

    /**
     * Executa um endpoint
     * 
     * @param string $action post|put|get|delete
     * @param string endpoint
     * @param array $data Parâmetros da requisicao
     * @return string Resposta do serviço
     */
    public function execute($action, $endpoint, $data){
        
        try{
            
            $url = $this->getUrl() . $endpoint;

            $this->curl->$action($url, $data);

            if($this->curl->error) {
                throw new \Exception($this->curl->errorCode . ': ' . $this->curl->errorMessage);
            }

            return $this->curl->rawResponse;
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }
}
<?php

namespace Superlogica;

class Curl extends \Curl\Curl {
    
    /**
     * Construtor
     * 
     * @param string $appToken
     * @param string $accessToken
     */
    public function __construct($appToken, $accessToken){

        $this->curl->setOpt(CURLOPT_RETURNTRANSFER , true);
        $this->curl->setOpt(CURLOPT_FOLLOWLOCATION , true);
        $this->curl->setOpt(CURLOPT_SSL_VERIFYPEER , false);
        $this->curl->setOpt(CURLOPT_SSL_VERIFYHOST , false);
        
        $this->curl->setOpt(CURLOPT_HTTPHEADER , [
            'Content-Type: application/x-www-form-urlencoded',
            "app_token: $this->appToken",
            "access_token: $this->accessToken",
        ]);
    }
}
<?php

namespace Superlogica;

class Exception extends \Exception {
    
    public $request;

    /**
     * Construtor
     * 
     * @param string $appToken
     * @param string $accessToken
     */
    public function __construct(\Curl\Curl $request){

        $this->request = $request;
    }
}
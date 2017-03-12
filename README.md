# Superlogica
Wrapper php para comunicação com a api superlogica

# Install
$ composer require dibmartins/superlogica

# Get Started
http://superlogica.com/developers/

# Examples

Para cadastrar um cliente na superlogica:
```php
try{

    require_once('../../vendor/autoload.php');

    $api = new \Superlogica\Api('https://api.superlogica.net/v2/financeiro/', 'your_app_token', 'your_access_token');

    $clientes = new \Superlogica\Clientes($api);

    $response = $clientes->post([
        'ST_NOME_SAC'           => 'Acme',
        'ST_NOMEREF_SAC'        => 'Acme LTDA.',
        'ST_DIAVENCIMENTO_SAC'  => '20',
    ]);

    var_dump($response);
}
catch(\Superlogica\Exception $e){
    
    var_dump($e);
}
```

Para obter um cliente na superlogica:
```php
try{

    require_once('../../vendor/autoload.php');

    $api = new \Superlogica\Api('https://api.superlogica.net/v2/financeiro/', 'your_app_token', 'your_access_token');

    $clientes = new \Superlogica\Clientes($api);

    $response = $clientes->get(['id' => 1]);

    var_dump($response);
}
catch(\Superlogica\Exception $e){
    
    var_dump($e);
}
```


### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

#License
Copyright (c) 2017 Diego Botelho

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is furnished
to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
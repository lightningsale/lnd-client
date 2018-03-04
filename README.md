## A LND Client for PHP

### TODO:
- Create a gRPC Client
- An Async Rest Client using Proxy Objects (http://ocramius.github.io/ProxyManager/)
- An Async gRPC client using Proxy Objects? (Or by default?)

### How to use:

`composer require lightningsale\lnd-client`

```php
<?php

use LightningSale\LndClient\ClientFactory;
use Psr\Log\NullLogger;

require './vendor/autoload.php';


$rpcUsername = 'rpcusername';
$rpcPassword = 'rpcpassword';
$rpcHost     = '127.0.0.1';
$rpcPort     = '8080';
$tlsCert     = '/root/.lnd/tls.cert';
$macaroon    = '/root/.lnd/admin.macaroon';


$client = ClientFactory::createRestClient($rpcHost, $rpcPort, $tlsCert, $macaroon, new NullLogger());
var_dump($client->getInfo());
```

### Example Symfony configuration:
```yaml
# services.yml
LightningSale\LndClient\Client: '@LightningSale\LndClient\RestClient'
LightningSale\LndClient\RestClient:
    class: LightningSale\LndClient\RestClient
    factory: ['LightningSale\LndClient\ClientFactory','createRestClient']
    arguments: ['127.0.0.1', '8080', '/root/.lnd/tls.cert', '/root/.lnd/admin.macaroon', '@logger']
```



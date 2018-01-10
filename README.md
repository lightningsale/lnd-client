# lnd-rest-php
A LND Client for PHP

## Known issues for the Rest Client:
- `closeChannel` doesn't work
  - No support for force closing a channel at this time
- `lookupInvoice` doesn't work 
- `unlockWallet` doesn't work
- `createWallet` doesn't work

## How to use:

`composer require lightningsale\lnd-client`

```php
<?php

use LightningSale\LndClient\ClientFactory;

require 'vendor/autoload.php';


$rpcUsername = 'rpcusername';
$rpcPassword = 'rpcpassword';
$rpcHost = '127.0.0.1';
$rpcPort = '8080';
$tlsCert = '/root/.lnd/tls.cert';


$client = ClientFactory::createRestClient($rpcHost, $rpcPort, $rpcUsername, $rpcPassword, $tlsCert);
var_dump($client);
```

## Example Symfony configuration:
```yaml
    LightningSale\LndClient\Client:
        alias: LightningSale\LndClient\RestClient
    LightningSale\LndClient\RestClient:
        class: LightningSale\LndClient\RestClient
        factory: ['LightningSale\LndClient\ClientFactory','createRestClient']
        arguments: ["%env(LND_HOST)%", "%env(LND_PORT)%", "%env(RPCUSER)%", "%env(RPCPASS)%", "%lnd_cert%"]
```



# lnd-rest-php
A LND Client for PHP

## Known issues:
- `closeChannel` doesnt work
  - No support for force closing a channel at this time
- `lookupInvoice` doesnt work 

How to use:

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

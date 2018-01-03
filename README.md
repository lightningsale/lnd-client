# lnd-rest-php
A LND REST Client for PHP

## Known issues:
- `closeChannel` doesnt work
  - No support for force closing a channel at this time
- `lookupInvoice` doesnt work 

How to use:

`composer require lightningsale\lnd-rest`

```php
<?php

require './vendor/autoload.php';

use GuzzleHttp\Client;
use LightningSale\LndRest\Resource\LndClient;

$rpcUsername = 'rpcusername';
$rpcPassword = 'rpcpassword';
$rpcHost = '127.0.0.1';
$rpcPort = '8080';
$tlsCert = '/root/.lnd/tls.cert';

$client = new Client([
    'base_uri' => "https://$rpcUsername:$rpcPassword@$rpcHost:$rpcPort",
    'verify' => $tlsCert,
]);

$lndClient = new LndClient($client);
var_dump($lndClient->getInfo());
```
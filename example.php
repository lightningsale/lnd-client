<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use LightningSale\LndClient\Resource\LndClient;

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
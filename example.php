<?php

use LightningSale\LndClient\ClientFactory;

require 'vendor/autoload.php';


$rpcUsername = 'rpcusername';
$rpcPassword = 'rpcpassword';
$rpcHost = '127.0.0.1';
$rpcPort = '8080';
$tlsCert = '/root/.lnd/tls.cert';


$client = ClientFactory::createRestClient($rpcHost, $rpcPort, $rpcUsername, $rpcPassword, $tlsCert);
var_dump($client->getInfo());
<?php

namespace LightningSale\LndRest\Resource;

use GuzzleHttp\Client;
use LightningSale\LndRest\Model\CreateWalletRequest;
use LightningSale\LndRest\Model\UnlockWalletRequest;

class WalletUnlockerResource
{
    private $httpClient;

    public function __construct(Client $client)
    {
        $this->httpClient = $client;
    }

    public function createWallet(CreateWalletRequest $body): void
    {
        $this->httpClient->post("/v1/createwallet", ['json' => $body]);
    }

    public function unlockWallet(UnlockWalletRequest $body): void
    {
        $this->httpClient->post('/v1/unlockwallet', ['json' => $body]);
    }
}
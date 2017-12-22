<?php

namespace LightningSale\LndRest\Model;

class LightningAddress implements \JsonSerializable
{
    /**
     * @var string
     */
    protected $pubkey;
    /**
     * @var string
     */
    protected $host;

    public function getPubkey(): string
    {
        return $this->pubkey;
    }

    public function getHost(): string
    {
        return $this->host;
    }
    
    public function __construct(string $pubkey, string $host)
    {
        $this->pubkey = $pubkey;
        $this->host = $host;
    }

    public function jsonSerialize()
    {
        return [
            'pubkey' => $this->pubkey,
            'host' => $this->host
        ];
    }


}
<?php

namespace LightningSale\LndRest\Model;

class ConnectPeerRequest implements \JsonSerializable
{
    /**
     * @var LightningAddress
     */
    protected $addr;
    /**
     * @var bool
     */
    protected $perm;

    public function getAddr(): LightningAddress
    {
        return $this->addr;
    }

    public function isPerm(): bool
    {
        return $this->perm;
    }

    public function __construct(LightningAddress $addr, bool $perm)
    {
        $this->addr = $addr;
        $this->perm = $perm;
    }

    public function jsonSerialize()
    {
        return [
            'addr' => $this->addr,
            'perm' => $this->perm,
        ];
    }
}
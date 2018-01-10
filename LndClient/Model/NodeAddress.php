<?php

namespace LightningSale\LndClient\Model;

class NodeAddress
{
    /**
     * @var string
     */
    protected $network;
    /**
     * @var string
     */
    protected $addr;

    public function getNetwork(): string
    {
        return $this->network;
    }

    public function getAddr(): string
    {
        return $this->addr;
    }

    public function __construct(string $network, string $addr)
    {
        $this->network = $network;
        $this->addr = $addr;
    }

    public static function fromResponse(array $data): self
    {
        return new self(
            $data['network'],
            $data['addr']
        );
    }
}
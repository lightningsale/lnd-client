<?php

namespace LightningSale\LndClient\Model;

class LightningNode
{
    /**
     * @var int
     */
    protected $lastUpdate;
    /**
     * @var string
     */
    protected $pubKey;
    /**
     * @var string
     */
    protected $alias;
    /**
     * @var NodeAddress[]
     */
    protected $addresses;
    /**
     * @var string
     */
    protected $color;

    public function getLastUpdate(): int
    {
        return $this->lastUpdate;
    }

    public function getPubKey(): string
    {
        return $this->pubKey;
    }

    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @return NodeAddress[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * LightningNode constructor.
     * @param int $lastUpdate
     * @param string $pubKey
     * @param string $alias
     * @param NodeAddress[] $addresses
     * @param string $color
     */
    public function __construct(int $lastUpdate, string $pubKey, string $alias, array $addresses, string $color)
    {
        $this->lastUpdate = $lastUpdate;
        $this->pubKey = $pubKey;
        $this->alias = $alias;
        $this->addresses = $addresses;
        $this->color = $color;
    }


    public static function fromResponse(array $data): self
    {
        return new self(
            $data['last_update'] ?? 0,
            $data['pub_key'],
            $data['alias'] ?? "",
            array_map(function($i) {return NodeAddress::fromResponse($i);}, $data['addresses'] ?? []),
            $data['color']
        );
    }
}
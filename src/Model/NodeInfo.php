<?php

namespace LightningSale\LndClient\Model;

class NodeInfo
{
    /**
     * @var LightningNode
     */
    protected $node;
    /**
     * @var int
     */
    protected $numChannels;
    /**
     * @var string
     */
    protected $totalCapacity;

    public function getNode(): LightningNode
    {
        return $this->node;
    }

    public function getNumChannels(): int
    {
        return $this->numChannels;
    }

    public function getTotalCapacity(): string
    {
        return $this->totalCapacity;
    }

    public function __construct(LightningNode $node, int $numChannels, string $totalCapacity)
    {
        $this->node = $node;
        $this->numChannels = $numChannels;
        $this->totalCapacity = $totalCapacity;
    }

    public static function fromResponse(array $body): self
    {
        return new self(
            LightningNode::fromResponse($body['node']),
            $body['num_channels'],
            $body['total_capacity']
        );
    }
}
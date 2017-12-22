<?php

namespace LightningSale\LndRest\Model;

class ChannelEdge
{
    /**
     * @var string
     */
    protected $channelId;
    /**
     * @var string
     */
    protected $chanPoint;
    /**
     * @var int
     */
    protected $lastUpdate;
    /**
     * @var string
     */
    protected $node1Pub;
    /**
     * @var string
     */
    protected $node2Pub;
    /**
     * @var string
     */
    protected $capacity;
    /**
     * @var RoutingPolicy
     */
    protected $node1Policy;
    /**
     * @var RoutingPolicy
     */
    protected $node2Policy;

    public function getChannelId(): string
    {
        return $this->channelId;
    }

    public function getChanPoint(): string
    {
        return $this->chanPoint;
    }

    public function getLastUpdate(): int
    {
        return $this->lastUpdate;
    }

    public function getNode1Pub(): string
    {
        return $this->node1Pub;
    }

    public function getNode2Pub(): string
    {
        return $this->node2Pub;
    }

    public function getCapacity(): string
    {
        return $this->capacity;
    }

    public function getNode1Policy(): RoutingPolicy
    {
        return $this->node1Policy;
    }

    public function getNode2Policy(): RoutingPolicy
    {
        return $this->node2Policy;
    }

    public function __construct(string $channelId, string $chanPoint, int $lastUpdate, string $node1Pub, string $node2Pub, string $capacity, RoutingPolicy $node1Policy, RoutingPolicy $node2Policy)
    {
        $this->channelId = $channelId;
        $this->chanPoint = $chanPoint;
        $this->lastUpdate = $lastUpdate;
        $this->node1Pub = $node1Pub;
        $this->node2Pub = $node2Pub;
        $this->capacity = $capacity;
        $this->node1Policy = $node1Policy;
        $this->node2Policy = $node2Policy;
    }

    public static function fromResponse(array $body): self
    {
        return new self(
            $body['channelId'],
            $body['chanPoint'],
            $body['lastUpdate'],
            $body['node1Pub'],
            $body['node2Pub'],
            $body['capacity'],
            RoutingPolicy::fromResponse($body['node1Policy']),
            RoutingPolicy::fromResponse($body['node2Policy'])
        );
    }

}
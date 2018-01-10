<?php

namespace LightningSale\LndClient\Model;

class ChannelEdgeUpdate
{
    /**
     * @var string
     */
    protected $chanId;
    /**
     * @var ChannelPoint
     */
    protected $chanPoint;
    /**
     * @var string
     */
    protected $capacity;
    /**
     * @var RoutingPolicy
     */
    protected $routingPolicy;
    /**
     * @var string
     */
    protected $advertisingNode;
    /**
     * @var string
     */
    protected $connectingNode;
    /**
     * @return string
     */
    public function getChanId(): string
    {
        return $this->chanId;
    }
    /**
     * @param string $chanId
     *
     * @return self
     */
    public function setChanId($chanId = null): self
    {
        $this->chanId = $chanId;
        return $this;
    }
    /**
     * @return ChannelPoint
     */
    public function getChanPoint(): ChannelPoint
    {
        return $this->chanPoint;
    }
    /**
     * @param ChannelPoint $chanPoint
     *
     * @return self
     */
    public function setChanPoint(ChannelPoint $chanPoint = null): self
    {
        $this->chanPoint = $chanPoint;
        return $this;
    }
    /**
     * @return string
     */
    public function getCapacity(): string
    {
        return $this->capacity;
    }
    /**
     * @param string $capacity
     *
     * @return self
     */
    public function setCapacity($capacity = null): self
    {
        $this->capacity = $capacity;
        return $this;
    }
    /**
     * @return RoutingPolicy
     */
    public function getRoutingPolicy(): RoutingPolicy
    {
        return $this->routingPolicy;
    }
    /**
     * @param RoutingPolicy $routingPolicy
     *
     * @return self
     */
    public function setRoutingPolicy(RoutingPolicy $routingPolicy = null): self
    {
        $this->routingPolicy = $routingPolicy;
        return $this;
    }
    /**
     * @return string
     */
    public function getAdvertisingNode(): string
    {
        return $this->advertisingNode;
    }
    /**
     * @param string $advertisingNode
     *
     * @return self
     */
    public function setAdvertisingNode($advertisingNode = null): self
    {
        $this->advertisingNode = $advertisingNode;
        return $this;
    }
    /**
     * @return string
     */
    public function getConnectingNode(): string
    {
        return $this->connectingNode;
    }
    /**
     * @param string $connectingNode
     *
     * @return self
     */
    public function setConnectingNode($connectingNode = null): self
    {
        $this->connectingNode = $connectingNode;
        return $this;
    }
}
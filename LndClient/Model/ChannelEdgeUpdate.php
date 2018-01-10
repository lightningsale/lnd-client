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
    public function getChanId()
    {
        return $this->chanId;
    }
    /**
     * @param string $chanId
     *
     * @return self
     */
    public function setChanId($chanId = null)
    {
        $this->chanId = $chanId;
        return $this;
    }
    /**
     * @return ChannelPoint
     */
    public function getChanPoint()
    {
        return $this->chanPoint;
    }
    /**
     * @param ChannelPoint $chanPoint
     *
     * @return self
     */
    public function setChanPoint(ChannelPoint $chanPoint = null)
    {
        $this->chanPoint = $chanPoint;
        return $this;
    }
    /**
     * @return string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }
    /**
     * @param string $capacity
     *
     * @return self
     */
    public function setCapacity($capacity = null)
    {
        $this->capacity = $capacity;
        return $this;
    }
    /**
     * @return RoutingPolicy
     */
    public function getRoutingPolicy()
    {
        return $this->routingPolicy;
    }
    /**
     * @param RoutingPolicy $routingPolicy
     *
     * @return self
     */
    public function setRoutingPolicy(RoutingPolicy $routingPolicy = null)
    {
        $this->routingPolicy = $routingPolicy;
        return $this;
    }
    /**
     * @return string
     */
    public function getAdvertisingNode()
    {
        return $this->advertisingNode;
    }
    /**
     * @param string $advertisingNode
     *
     * @return self
     */
    public function setAdvertisingNode($advertisingNode = null)
    {
        $this->advertisingNode = $advertisingNode;
        return $this;
    }
    /**
     * @return string
     */
    public function getConnectingNode()
    {
        return $this->connectingNode;
    }
    /**
     * @param string $connectingNode
     *
     * @return self
     */
    public function setConnectingNode($connectingNode = null)
    {
        $this->connectingNode = $connectingNode;
        return $this;
    }
}
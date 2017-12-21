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
    /**
     * @return string
     */
    public function getChannelId()
    {
        return $this->channelId;
    }
    /**
     * @param string $channelId
     *
     * @return self
     */
    public function setChannelId($channelId = null)
    {
        $this->channelId = $channelId;
        return $this;
    }
    /**
     * @return string
     */
    public function getChanPoint()
    {
        return $this->chanPoint;
    }
    /**
     * @param string $chanPoint
     *
     * @return self
     */
    public function setChanPoint($chanPoint = null)
    {
        $this->chanPoint = $chanPoint;
        return $this;
    }
    /**
     * @return int
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }
    /**
     * @param int $lastUpdate
     *
     * @return self
     */
    public function setLastUpdate($lastUpdate = null)
    {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }
    /**
     * @return string
     */
    public function getNode1Pub()
    {
        return $this->node1Pub;
    }
    /**
     * @param string $node1Pub
     *
     * @return self
     */
    public function setNode1Pub($node1Pub = null)
    {
        $this->node1Pub = $node1Pub;
        return $this;
    }
    /**
     * @return string
     */
    public function getNode2Pub()
    {
        return $this->node2Pub;
    }
    /**
     * @param string $node2Pub
     *
     * @return self
     */
    public function setNode2Pub($node2Pub = null)
    {
        $this->node2Pub = $node2Pub;
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
    public function getNode1Policy()
    {
        return $this->node1Policy;
    }
    /**
     * @param RoutingPolicy $node1Policy
     *
     * @return self
     */
    public function setNode1Policy(RoutingPolicy $node1Policy = null)
    {
        $this->node1Policy = $node1Policy;
        return $this;
    }
    /**
     * @return RoutingPolicy
     */
    public function getNode2Policy()
    {
        return $this->node2Policy;
    }
    /**
     * @param RoutingPolicy $node2Policy
     *
     * @return self
     */
    public function setNode2Policy(RoutingPolicy $node2Policy = null)
    {
        $this->node2Policy = $node2Policy;
        return $this;
    }
}
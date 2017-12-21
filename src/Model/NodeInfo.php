<?php

namespace LightningSale\LndRest\Model;

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
    /**
     * @return LightningNode
     */
    public function getNode()
    {
        return $this->node;
    }
    /**
     * @param LightningNode $node
     *
     * @return self
     */
    public function setNode(LightningNode $node = null)
    {
        $this->node = $node;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumChannels()
    {
        return $this->numChannels;
    }
    /**
     * @param int $numChannels
     *
     * @return self
     */
    public function setNumChannels($numChannels = null)
    {
        $this->numChannels = $numChannels;
        return $this;
    }
    /**
     * @return string
     */
    public function getTotalCapacity()
    {
        return $this->totalCapacity;
    }
    /**
     * @param string $totalCapacity
     *
     * @return self
     */
    public function setTotalCapacity($totalCapacity = null)
    {
        $this->totalCapacity = $totalCapacity;
        return $this;
    }
}
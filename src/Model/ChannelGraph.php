<?php

namespace LightningSale\LndRest\Model;

class ChannelGraph
{
    /**
     * @var LightningNode[]
     */
    protected $nodes;
    /**
     * @var ChannelEdge[]
     */
    protected $edges;
    /**
     * @return LightningNode[]
     */
    public function getNodes()
    {
        return $this->nodes;
    }
    /**
     * @param LightningNode[] $nodes
     *
     * @return self
     */
    public function setNodes(array $nodes = null)
    {
        $this->nodes = $nodes;
        return $this;
    }
    /**
     * @return ChannelEdge[]
     */
    public function getEdges()
    {
        return $this->edges;
    }
    /**
     * @param ChannelEdge[] $edges
     *
     * @return self
     */
    public function setEdges(array $edges = null)
    {
        $this->edges = $edges;
        return $this;
    }
}
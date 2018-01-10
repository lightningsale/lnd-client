<?php

namespace LightningSale\LndClient\Model;

class GraphTopologyUpdate
{
    /**
     * @var NodeUpdate[]
     */
    protected $nodeUpdates;
    /**
     * @var ChannelEdgeUpdate[]
     */
    protected $channelUpdates;
    /**
     * @var ClosedChannelUpdate[]
     */
    protected $closedChans;
    /**
     * @return NodeUpdate[]
     */
    public function getNodeUpdates()
    {
        return $this->nodeUpdates;
    }
    /**
     * @param NodeUpdate[] $nodeUpdates
     *
     * @return self
     */
    public function setNodeUpdates(array $nodeUpdates = null)
    {
        $this->nodeUpdates = $nodeUpdates;
        return $this;
    }
    /**
     * @return ChannelEdgeUpdate[]
     */
    public function getChannelUpdates()
    {
        return $this->channelUpdates;
    }
    /**
     * @param ChannelEdgeUpdate[] $channelUpdates
     *
     * @return self
     */
    public function setChannelUpdates(array $channelUpdates = null)
    {
        $this->channelUpdates = $channelUpdates;
        return $this;
    }
    /**
     * @return ClosedChannelUpdate[]
     */
    public function getClosedChans()
    {
        return $this->closedChans;
    }
    /**
     * @param ClosedChannelUpdate[] $closedChans
     *
     * @return self
     */
    public function setClosedChans(array $closedChans = null)
    {
        $this->closedChans = $closedChans;
        return $this;
    }
}
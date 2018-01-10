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
    public function getNodeUpdates(): array
    {
        return $this->nodeUpdates;
    }
    /**
     * @param NodeUpdate[] $nodeUpdates
     *
     * @return self
     */
    public function setNodeUpdates(array $nodeUpdates = null): self
    {
        $this->nodeUpdates = $nodeUpdates;
        return $this;
    }
    /**
     * @return ChannelEdgeUpdate[]
     */
    public function getChannelUpdates(): array
    {
        return $this->channelUpdates;
    }
    /**
     * @param ChannelEdgeUpdate[] $channelUpdates
     *
     * @return self
     */
    public function setChannelUpdates(array $channelUpdates = null): self
    {
        $this->channelUpdates = $channelUpdates;
        return $this;
    }
    /**
     * @return ClosedChannelUpdate[]
     */
    public function getClosedChans(): array
    {
        return $this->closedChans;
    }
    /**
     * @param ClosedChannelUpdate[] $closedChans
     *
     * @return self
     */
    public function setClosedChans(array $closedChans = null): self
    {
        $this->closedChans = $closedChans;
        return $this;
    }
}
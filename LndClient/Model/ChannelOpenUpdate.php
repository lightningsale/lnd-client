<?php

namespace LightningSale\LndClient\Model;

class ChannelOpenUpdate
{
    /**
     * @var ChannelPoint
     */
    protected $channelPoint;
    /**
     * @return ChannelPoint
     */
    public function getChannelPoint(): ChannelPoint
    {
        return $this->channelPoint;
    }
    /**
     * @param ChannelPoint $channelPoint
     *
     * @return self
     */
    public function setChannelPoint(ChannelPoint $channelPoint = null): self
    {
        $this->channelPoint = $channelPoint;
        return $this;
    }
}
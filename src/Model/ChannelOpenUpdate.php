<?php

namespace LightningSale\LndRest\Model;

class ChannelOpenUpdate
{
    /**
     * @var ChannelPoint
     */
    protected $channelPoint;
    /**
     * @return ChannelPoint
     */
    public function getChannelPoint()
    {
        return $this->channelPoint;
    }
    /**
     * @param ChannelPoint $channelPoint
     *
     * @return self
     */
    public function setChannelPoint(ChannelPoint $channelPoint = null)
    {
        $this->channelPoint = $channelPoint;
        return $this;
    }
}
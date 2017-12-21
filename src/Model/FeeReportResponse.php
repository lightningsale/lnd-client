<?php

namespace LightningSale\LndRest\Model;

class FeeReportResponse
{
    /**
     * @var ChannelFeeReport[]
     */
    protected $channelFees;
    /**
     * @return ChannelFeeReport[]
     */
    public function getChannelFees()
    {
        return $this->channelFees;
    }
    /**
     * @param ChannelFeeReport[] $channelFees
     *
     * @return self
     */
    public function setChannelFees(array $channelFees = null)
    {
        $this->channelFees = $channelFees;
        return $this;
    }
}
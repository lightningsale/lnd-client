<?php

namespace LightningSale\LndRest\Model;

class PendingChannelResponseClosedChannel
{
    /**
     * @var PendingChannelResponsePendingChannel
     */
    protected $channel;
    /**
     * @var string
     */
    protected $closingTxid;
    /**
     * @return PendingChannelResponsePendingChannel
     */
    public function getChannel()
    {
        return $this->channel;
    }
    /**
     * @param PendingChannelResponsePendingChannel $channel
     *
     * @return self
     */
    public function setChannel(PendingChannelResponsePendingChannel $channel = null)
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * @return string
     */
    public function getClosingTxid()
    {
        return $this->closingTxid;
    }
    /**
     * @param string $closingTxid
     *
     * @return self
     */
    public function setClosingTxid($closingTxid = null)
    {
        $this->closingTxid = $closingTxid;
        return $this;
    }
}
<?php

namespace LightningSale\LndRest\Model;

class PendingChannelResponse
{
    /**
     * @var string
     */
    protected $totalLimboBalance;
    /**
     * @var PendingChannelResponsePendingOpenChannel[]
     */
    protected $pendingOpenChannels;
    /**
     * @var PendingChannelResponseClosedChannel[]
     */
    protected $pendingClosingChannels;
    /**
     * @var PendingChannelResponseForceClosedChannel[]
     */
    protected $pendingForceClosingChannels;
    /**
     * @return string
     */
    public function getTotalLimboBalance()
    {
        return $this->totalLimboBalance;
    }
    /**
     * @param string $totalLimboBalance
     *
     * @return self
     */
    public function setTotalLimboBalance($totalLimboBalance = null)
    {
        $this->totalLimboBalance = $totalLimboBalance;
        return $this;
    }
    /**
     * @return PendingChannelResponsePendingOpenChannel[]
     */
    public function getPendingOpenChannels()
    {
        return $this->pendingOpenChannels;
    }
    /**
     * @param PendingChannelResponsePendingOpenChannel[] $pendingOpenChannels
     *
     * @return self
     */
    public function setPendingOpenChannels(array $pendingOpenChannels = null)
    {
        $this->pendingOpenChannels = $pendingOpenChannels;
        return $this;
    }
    /**
     * @return PendingChannelResponseClosedChannel[]
     */
    public function getPendingClosingChannels()
    {
        return $this->pendingClosingChannels;
    }
    /**
     * @param PendingChannelResponseClosedChannel[] $pendingClosingChannels
     *
     * @return self
     */
    public function setPendingClosingChannels(array $pendingClosingChannels = null)
    {
        $this->pendingClosingChannels = $pendingClosingChannels;
        return $this;
    }
    /**
     * @return PendingChannelResponseForceClosedChannel[]
     */
    public function getPendingForceClosingChannels()
    {
        return $this->pendingForceClosingChannels;
    }
    /**
     * @param PendingChannelResponseForceClosedChannel[] $pendingForceClosingChannels
     *
     * @return self
     */
    public function setPendingForceClosingChannels(array $pendingForceClosingChannels = null)
    {
        $this->pendingForceClosingChannels = $pendingForceClosingChannels;
        return $this;
    }
}
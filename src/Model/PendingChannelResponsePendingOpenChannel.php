<?php

namespace LightningSale\LndRest\Model;

class PendingChannelResponsePendingOpenChannel
{
    /**
     * @var PendingChannelResponsePendingChannel
     */
    protected $channel;
    /**
     * @var int
     */
    protected $confirmationHeight;
    /**
     * @var int
     */
    protected $blocksTillOpen;
    /**
     * @var string
     */
    protected $commitFee;
    /**
     * @var string
     */
    protected $commitWeight;
    /**
     * @var string
     */
    protected $feePerKw;
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
     * @return int
     */
    public function getConfirmationHeight()
    {
        return $this->confirmationHeight;
    }
    /**
     * @param int $confirmationHeight
     *
     * @return self
     */
    public function setConfirmationHeight($confirmationHeight = null)
    {
        $this->confirmationHeight = $confirmationHeight;
        return $this;
    }
    /**
     * @return int
     */
    public function getBlocksTillOpen()
    {
        return $this->blocksTillOpen;
    }
    /**
     * @param int $blocksTillOpen
     *
     * @return self
     */
    public function setBlocksTillOpen($blocksTillOpen = null)
    {
        $this->blocksTillOpen = $blocksTillOpen;
        return $this;
    }
    /**
     * @return string
     */
    public function getCommitFee()
    {
        return $this->commitFee;
    }
    /**
     * @param string $commitFee
     *
     * @return self
     */
    public function setCommitFee($commitFee = null)
    {
        $this->commitFee = $commitFee;
        return $this;
    }
    /**
     * @return string
     */
    public function getCommitWeight()
    {
        return $this->commitWeight;
    }
    /**
     * @param string $commitWeight
     *
     * @return self
     */
    public function setCommitWeight($commitWeight = null)
    {
        $this->commitWeight = $commitWeight;
        return $this;
    }
    /**
     * @return string
     */
    public function getFeePerKw()
    {
        return $this->feePerKw;
    }
    /**
     * @param string $feePerKw
     *
     * @return self
     */
    public function setFeePerKw($feePerKw = null)
    {
        $this->feePerKw = $feePerKw;
        return $this;
    }
}
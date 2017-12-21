<?php

namespace LightningSale\LndRest\Model;

class PendingChannelResponseForceClosedChannel
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
     * @var string
     */
    protected $limboBalance;
    /**
     * @var int
     */
    protected $maturityHeight;
    /**
     * @var int
     */
    protected $blocksTilMaturity;
    /**
     * @var string
     */
    protected $recoveredBalance;
    /**
     * @var PendingHTLC[]
     */
    protected $pendingHtlcs;
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
    /**
     * @return string
     */
    public function getLimboBalance()
    {
        return $this->limboBalance;
    }
    /**
     * @param string $limboBalance
     *
     * @return self
     */
    public function setLimboBalance($limboBalance = null)
    {
        $this->limboBalance = $limboBalance;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaturityHeight()
    {
        return $this->maturityHeight;
    }
    /**
     * @param int $maturityHeight
     *
     * @return self
     */
    public function setMaturityHeight($maturityHeight = null)
    {
        $this->maturityHeight = $maturityHeight;
        return $this;
    }
    /**
     * @return int
     */
    public function getBlocksTilMaturity()
    {
        return $this->blocksTilMaturity;
    }
    /**
     * @param int $blocksTilMaturity
     *
     * @return self
     */
    public function setBlocksTilMaturity($blocksTilMaturity = null)
    {
        $this->blocksTilMaturity = $blocksTilMaturity;
        return $this;
    }
    /**
     * @return string
     */
    public function getRecoveredBalance()
    {
        return $this->recoveredBalance;
    }
    /**
     * @param string $recoveredBalance
     *
     * @return self
     */
    public function setRecoveredBalance($recoveredBalance = null)
    {
        $this->recoveredBalance = $recoveredBalance;
        return $this;
    }
    /**
     * @return PendingHTLC[]
     */
    public function getPendingHtlcs()
    {
        return $this->pendingHtlcs;
    }
    /**
     * @param PendingHTLC[] $pendingHtlcs
     *
     * @return self
     */
    public function setPendingHtlcs(array $pendingHtlcs = null)
    {
        $this->pendingHtlcs = $pendingHtlcs;
        return $this;
    }
}
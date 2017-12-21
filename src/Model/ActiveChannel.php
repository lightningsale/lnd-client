<?php

namespace LightningSale\LndRest\Model;

class ActiveChannel
{
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var string
     */
    protected $remotePubkey;
    /**
     * @var string
     */
    protected $channelPoint;
    /**
     * @var string
     */
    protected $chanId;
    /**
     * @var string
     */
    protected $capacity;
    /**
     * @var string
     */
    protected $localBalance;
    /**
     * @var string
     */
    protected $remoteBalance;
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
     * @var string
     */
    protected $unsettledBalance;
    /**
     * @var string
     */
    protected $totalSatoshisSent;
    /**
     * @var string
     */
    protected $totalSatoshisReceived;
    /**
     * @var string
     */
    protected $numUpdates;
    /**
     * @var HTLC[]
     */
    protected $pendingHtlcs;
    /**
     * @var int
     */
    protected $csvDelay;
    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * @param bool $active
     *
     * @return self
     */
    public function setActive($active = null)
    {
        $this->active = $active;
        return $this;
    }
    /**
     * @return string
     */
    public function getRemotePubkey()
    {
        return $this->remotePubkey;
    }
    /**
     * @param string $remotePubkey
     *
     * @return self
     */
    public function setRemotePubkey($remotePubkey = null)
    {
        $this->remotePubkey = $remotePubkey;
        return $this;
    }
    /**
     * @return string
     */
    public function getChannelPoint()
    {
        return $this->channelPoint;
    }
    /**
     * @param string $channelPoint
     *
     * @return self
     */
    public function setChannelPoint($channelPoint = null)
    {
        $this->channelPoint = $channelPoint;
        return $this;
    }
    /**
     * @return string
     */
    public function getChanId()
    {
        return $this->chanId;
    }
    /**
     * @param string $chanId
     *
     * @return self
     */
    public function setChanId($chanId = null)
    {
        $this->chanId = $chanId;
        return $this;
    }
    /**
     * @return string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }
    /**
     * @param string $capacity
     *
     * @return self
     */
    public function setCapacity($capacity = null)
    {
        $this->capacity = $capacity;
        return $this;
    }
    /**
     * @return string
     */
    public function getLocalBalance()
    {
        return $this->localBalance;
    }
    /**
     * @param string $localBalance
     *
     * @return self
     */
    public function setLocalBalance($localBalance = null)
    {
        $this->localBalance = $localBalance;
        return $this;
    }
    /**
     * @return string
     */
    public function getRemoteBalance()
    {
        return $this->remoteBalance;
    }
    /**
     * @param string $remoteBalance
     *
     * @return self
     */
    public function setRemoteBalance($remoteBalance = null)
    {
        $this->remoteBalance = $remoteBalance;
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
    /**
     * @return string
     */
    public function getUnsettledBalance()
    {
        return $this->unsettledBalance;
    }
    /**
     * @param string $unsettledBalance
     *
     * @return self
     */
    public function setUnsettledBalance($unsettledBalance = null)
    {
        $this->unsettledBalance = $unsettledBalance;
        return $this;
    }
    /**
     * @return string
     */
    public function getTotalSatoshisSent()
    {
        return $this->totalSatoshisSent;
    }
    /**
     * @param string $totalSatoshisSent
     *
     * @return self
     */
    public function setTotalSatoshisSent($totalSatoshisSent = null)
    {
        $this->totalSatoshisSent = $totalSatoshisSent;
        return $this;
    }
    /**
     * @return string
     */
    public function getTotalSatoshisReceived()
    {
        return $this->totalSatoshisReceived;
    }
    /**
     * @param string $totalSatoshisReceived
     *
     * @return self
     */
    public function setTotalSatoshisReceived($totalSatoshisReceived = null)
    {
        $this->totalSatoshisReceived = $totalSatoshisReceived;
        return $this;
    }
    /**
     * @return string
     */
    public function getNumUpdates()
    {
        return $this->numUpdates;
    }
    /**
     * @param string $numUpdates
     *
     * @return self
     */
    public function setNumUpdates($numUpdates = null)
    {
        $this->numUpdates = $numUpdates;
        return $this;
    }
    /**
     * @return HTLC[]
     */
    public function getPendingHtlcs()
    {
        return $this->pendingHtlcs;
    }
    /**
     * @param HTLC[] $pendingHtlcs
     *
     * @return self
     */
    public function setPendingHtlcs(array $pendingHtlcs = null)
    {
        $this->pendingHtlcs = $pendingHtlcs;
        return $this;
    }
    /**
     * @return int
     */
    public function getCsvDelay()
    {
        return $this->csvDelay;
    }
    /**
     * @param int $csvDelay
     *
     * @return self
     */
    public function setCsvDelay($csvDelay = null)
    {
        $this->csvDelay = $csvDelay;
        return $this;
    }
}
<?php

namespace LightningSale\LndRest\Model;

class PendingChannelResponsePendingChannel
{
    /**
     * @var string
     */
    protected $remoteNodePub;
    /**
     * @var string
     */
    protected $channelPoint;
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
     * @return string
     */
    public function getRemoteNodePub()
    {
        return $this->remoteNodePub;
    }
    /**
     * @param string $remoteNodePub
     *
     * @return self
     */
    public function setRemoteNodePub($remoteNodePub = null)
    {
        $this->remoteNodePub = $remoteNodePub;
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
}
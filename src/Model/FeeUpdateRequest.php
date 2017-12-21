<?php

namespace LightningSale\LndRest\Model;

class FeeUpdateRequest
{
    /**
     * @var bool
     */
    protected $global;
    /**
     * @var ChannelPoint
     */
    protected $chanPoint;
    /**
     * @var string
     */
    protected $baseFeeMsat;
    /**
     * @var float
     */
    protected $feeRate;
    /**
     * @return bool
     */
    public function getGlobal()
    {
        return $this->global;
    }
    /**
     * @param bool $global
     *
     * @return self
     */
    public function setGlobal($global = null)
    {
        $this->global = $global;
        return $this;
    }
    /**
     * @return ChannelPoint
     */
    public function getChanPoint()
    {
        return $this->chanPoint;
    }
    /**
     * @param ChannelPoint $chanPoint
     *
     * @return self
     */
    public function setChanPoint(ChannelPoint $chanPoint = null)
    {
        $this->chanPoint = $chanPoint;
        return $this;
    }
    /**
     * @return string
     */
    public function getBaseFeeMsat()
    {
        return $this->baseFeeMsat;
    }
    /**
     * @param string $baseFeeMsat
     *
     * @return self
     */
    public function setBaseFeeMsat($baseFeeMsat = null)
    {
        $this->baseFeeMsat = $baseFeeMsat;
        return $this;
    }
    /**
     * @return float
     */
    public function getFeeRate()
    {
        return $this->feeRate;
    }
    /**
     * @param float $feeRate
     *
     * @return self
     */
    public function setFeeRate($feeRate = null)
    {
        $this->feeRate = $feeRate;
        return $this;
    }
}
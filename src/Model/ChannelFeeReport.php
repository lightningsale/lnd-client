<?php

namespace LightningSale\LndRest\Model;

class ChannelFeeReport
{
    /**
     * @var string
     */
    protected $chanPoint;
    /**
     * @var string
     */
    protected $baseFeeMsat;
    /**
     * @var string
     */
    protected $feePerMil;
    /**
     * @var float
     */
    protected $feeRate;
    /**
     * @return string
     */
    public function getChanPoint()
    {
        return $this->chanPoint;
    }
    /**
     * @param string $chanPoint
     *
     * @return self
     */
    public function setChanPoint($chanPoint = null)
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
     * @return string
     */
    public function getFeePerMil()
    {
        return $this->feePerMil;
    }
    /**
     * @param string $feePerMil
     *
     * @return self
     */
    public function setFeePerMil($feePerMil = null)
    {
        $this->feePerMil = $feePerMil;
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
<?php

namespace LightningSale\LndRest\Model;

class RoutingPolicy
{
    /**
     * @var int
     */
    protected $timeLockDelta;
    /**
     * @var string
     */
    protected $minHtlc;
    /**
     * @var string
     */
    protected $feeBaseMsat;
    /**
     * @var string
     */
    protected $feeRateMilliMsat;
    /**
     * @return int
     */
    public function getTimeLockDelta()
    {
        return $this->timeLockDelta;
    }
    /**
     * @param int $timeLockDelta
     *
     * @return self
     */
    public function setTimeLockDelta($timeLockDelta = null)
    {
        $this->timeLockDelta = $timeLockDelta;
        return $this;
    }
    /**
     * @return string
     */
    public function getMinHtlc()
    {
        return $this->minHtlc;
    }
    /**
     * @param string $minHtlc
     *
     * @return self
     */
    public function setMinHtlc($minHtlc = null)
    {
        $this->minHtlc = $minHtlc;
        return $this;
    }
    /**
     * @return string
     */
    public function getFeeBaseMsat()
    {
        return $this->feeBaseMsat;
    }
    /**
     * @param string $feeBaseMsat
     *
     * @return self
     */
    public function setFeeBaseMsat($feeBaseMsat = null)
    {
        $this->feeBaseMsat = $feeBaseMsat;
        return $this;
    }
    /**
     * @return string
     */
    public function getFeeRateMilliMsat()
    {
        return $this->feeRateMilliMsat;
    }
    /**
     * @param string $feeRateMilliMsat
     *
     * @return self
     */
    public function setFeeRateMilliMsat($feeRateMilliMsat = null)
    {
        $this->feeRateMilliMsat = $feeRateMilliMsat;
        return $this;
    }
}
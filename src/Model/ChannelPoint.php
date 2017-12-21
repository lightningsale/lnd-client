<?php

namespace LightningSale\LndRest\Model;

class ChannelPoint
{
    /**
     * @var string
     */
    protected $fundingTxid;
    /**
     * @var string
     */
    protected $fundingTxidStr;
    /**
     * @var int
     */
    protected $outputIndex;
    /**
     * @return string
     */
    public function getFundingTxid()
    {
        return $this->fundingTxid;
    }
    /**
     * @param string $fundingTxid
     *
     * @return self
     */
    public function setFundingTxid($fundingTxid = null)
    {
        $this->fundingTxid = $fundingTxid;
        return $this;
    }
    /**
     * @return string
     */
    public function getFundingTxidStr()
    {
        return $this->fundingTxidStr;
    }
    /**
     * @param string $fundingTxidStr
     *
     * @return self
     */
    public function setFundingTxidStr($fundingTxidStr = null)
    {
        $this->fundingTxidStr = $fundingTxidStr;
        return $this;
    }
    /**
     * @return int
     */
    public function getOutputIndex()
    {
        return $this->outputIndex;
    }
    /**
     * @param int $outputIndex
     *
     * @return self
     */
    public function setOutputIndex($outputIndex = null)
    {
        $this->outputIndex = $outputIndex;
        return $this;
    }
}
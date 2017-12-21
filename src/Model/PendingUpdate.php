<?php

namespace LightningSale\LndRest\Model;

class PendingUpdate
{
    /**
     * @var string
     */
    protected $txid;
    /**
     * @var int
     */
    protected $outputIndex;
    /**
     * @return string
     */
    public function getTxid()
    {
        return $this->txid;
    }
    /**
     * @param string $txid
     *
     * @return self
     */
    public function setTxid($txid = null)
    {
        $this->txid = $txid;
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
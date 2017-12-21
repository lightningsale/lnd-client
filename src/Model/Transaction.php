<?php

namespace LightningSale\LndRest\Model;

class Transaction
{
    /**
     * @var string
     */
    protected $txHash;
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var int
     */
    protected $numConfirmations;
    /**
     * @var string
     */
    protected $blockHash;
    /**
     * @var int
     */
    protected $blockHeight;
    /**
     * @var string
     */
    protected $timeStamp;
    /**
     * @var string
     */
    protected $totalFees;
    /**
     * @var string[]
     */
    protected $destAddresses;
    /**
     * @return string
     */
    public function getTxHash()
    {
        return $this->txHash;
    }
    /**
     * @param string $txHash
     *
     * @return self
     */
    public function setTxHash($txHash = null)
    {
        $this->txHash = $txHash;
        return $this;
    }
    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * @param string $amount
     *
     * @return self
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumConfirmations()
    {
        return $this->numConfirmations;
    }
    /**
     * @param int $numConfirmations
     *
     * @return self
     */
    public function setNumConfirmations($numConfirmations = null)
    {
        $this->numConfirmations = $numConfirmations;
        return $this;
    }
    /**
     * @return string
     */
    public function getBlockHash()
    {
        return $this->blockHash;
    }
    /**
     * @param string $blockHash
     *
     * @return self
     */
    public function setBlockHash($blockHash = null)
    {
        $this->blockHash = $blockHash;
        return $this;
    }
    /**
     * @return int
     */
    public function getBlockHeight()
    {
        return $this->blockHeight;
    }
    /**
     * @param int $blockHeight
     *
     * @return self
     */
    public function setBlockHeight($blockHeight = null)
    {
        $this->blockHeight = $blockHeight;
        return $this;
    }
    /**
     * @return string
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }
    /**
     * @param string $timeStamp
     *
     * @return self
     */
    public function setTimeStamp($timeStamp = null)
    {
        $this->timeStamp = $timeStamp;
        return $this;
    }
    /**
     * @return string
     */
    public function getTotalFees()
    {
        return $this->totalFees;
    }
    /**
     * @param string $totalFees
     *
     * @return self
     */
    public function setTotalFees($totalFees = null)
    {
        $this->totalFees = $totalFees;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getDestAddresses()
    {
        return $this->destAddresses;
    }
    /**
     * @param string[] $destAddresses
     *
     * @return self
     */
    public function setDestAddresses(array $destAddresses = null)
    {
        $this->destAddresses = $destAddresses;
        return $this;
    }
}
<?php

namespace LightningSale\LndRest\Model;

class PendingHTLC
{
    /**
     * @var bool
     */
    protected $incoming;
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var string
     */
    protected $outpoint;
    /**
     * @var int
     */
    protected $maturityHeight;
    /**
     * @var int
     */
    protected $blocksTilMaturity;
    /**
     * @var int
     */
    protected $stage;
    /**
     * @return bool
     */
    public function getIncoming()
    {
        return $this->incoming;
    }
    /**
     * @param bool $incoming
     *
     * @return self
     */
    public function setIncoming($incoming = null)
    {
        $this->incoming = $incoming;
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
     * @return string
     */
    public function getOutpoint()
    {
        return $this->outpoint;
    }
    /**
     * @param string $outpoint
     *
     * @return self
     */
    public function setOutpoint($outpoint = null)
    {
        $this->outpoint = $outpoint;
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
     * @return int
     */
    public function getStage()
    {
        return $this->stage;
    }
    /**
     * @param int $stage
     *
     * @return self
     */
    public function setStage($stage = null)
    {
        $this->stage = $stage;
        return $this;
    }
}
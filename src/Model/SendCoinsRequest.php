<?php

namespace LightningSale\LndRest\Model;

class SendCoinsRequest
{
    /**
     * @var string
     */
    protected $addr;
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var int
     */
    protected $targetConf;
    /**
     * @var string
     */
    protected $satPerByte;
    /**
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }
    /**
     * @param string $addr
     *
     * @return self
     */
    public function setAddr($addr = null)
    {
        $this->addr = $addr;
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
    public function getTargetConf()
    {
        return $this->targetConf;
    }
    /**
     * @param int $targetConf
     *
     * @return self
     */
    public function setTargetConf($targetConf = null)
    {
        $this->targetConf = $targetConf;
        return $this;
    }
    /**
     * @return string
     */
    public function getSatPerByte()
    {
        return $this->satPerByte;
    }
    /**
     * @param string $satPerByte
     *
     * @return self
     */
    public function setSatPerByte($satPerByte = null)
    {
        $this->satPerByte = $satPerByte;
        return $this;
    }
}
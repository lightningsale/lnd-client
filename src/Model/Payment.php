<?php

namespace LightningSale\LndRest\Model;

class Payment
{
    /**
     * @var string
     */
    protected $paymentHash;
    /**
     * @var string
     */
    protected $value;
    /**
     * @var string
     */
    protected $creationDate;
    /**
     * @var string[]
     */
    protected $path;
    /**
     * @var string
     */
    protected $fee;
    /**
     * @return string
     */
    public function getPaymentHash()
    {
        return $this->paymentHash;
    }
    /**
     * @param string $paymentHash
     *
     * @return self
     */
    public function setPaymentHash($paymentHash = null)
    {
        $this->paymentHash = $paymentHash;
        return $this;
    }
    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }
    /**
     * @param string $creationDate
     *
     * @return self
     */
    public function setCreationDate($creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getPath()
    {
        return $this->path;
    }
    /**
     * @param string[] $path
     *
     * @return self
     */
    public function setPath(array $path = null)
    {
        $this->path = $path;
        return $this;
    }
    /**
     * @return string
     */
    public function getFee()
    {
        return $this->fee;
    }
    /**
     * @param string $fee
     *
     * @return self
     */
    public function setFee($fee = null)
    {
        $this->fee = $fee;
        return $this;
    }
}
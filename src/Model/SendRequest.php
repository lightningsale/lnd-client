<?php

namespace LightningSale\LndRest\Model;

class SendRequest
{
    /**
     * @var string
     */
    protected $dest;
    /**
     * @var string
     */
    protected $destString;
    /**
     * @var string
     */
    protected $amt;
    /**
     * @var string
     */
    protected $paymentHash;
    /**
     * @var string
     */
    protected $paymentHashString;
    /**
     * @var string
     */
    protected $paymentRequest;
    /**
     * @return string
     */
    public function getDest()
    {
        return $this->dest;
    }
    /**
     * @param string $dest
     *
     * @return self
     */
    public function setDest($dest = null)
    {
        $this->dest = $dest;
        return $this;
    }
    /**
     * @return string
     */
    public function getDestString()
    {
        return $this->destString;
    }
    /**
     * @param string $destString
     *
     * @return self
     */
    public function setDestString($destString = null)
    {
        $this->destString = $destString;
        return $this;
    }
    /**
     * @return string
     */
    public function getAmt()
    {
        return $this->amt;
    }
    /**
     * @param string $amt
     *
     * @return self
     */
    public function setAmt($amt = null)
    {
        $this->amt = $amt;
        return $this;
    }
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
    public function getPaymentHashString()
    {
        return $this->paymentHashString;
    }
    /**
     * @param string $paymentHashString
     *
     * @return self
     */
    public function setPaymentHashString($paymentHashString = null)
    {
        $this->paymentHashString = $paymentHashString;
        return $this;
    }
    /**
     * @return string
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }
    /**
     * @param string $paymentRequest
     *
     * @return self
     */
    public function setPaymentRequest($paymentRequest = null)
    {
        $this->paymentRequest = $paymentRequest;
        return $this;
    }
}
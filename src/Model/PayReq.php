<?php

namespace LightningSale\LndRest\Model;

class PayReq
{
    /**
     * @var string
     */
    protected $destination;
    /**
     * @var string
     */
    protected $paymentHash;
    /**
     * @var string
     */
    protected $numSatoshis;
    /**
     * @var string
     */
    protected $timestamp;
    /**
     * @var string
     */
    protected $expiry;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $descriptionHash;
    /**
     * @var string
     */
    protected $fallbackAddr;
    /**
     * @var string
     */
    protected $cltvExpiry;
    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }
    /**
     * @param string $destination
     *
     * @return self
     */
    public function setDestination($destination = null)
    {
        $this->destination = $destination;
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
    public function getNumSatoshis()
    {
        return $this->numSatoshis;
    }
    /**
     * @param string $numSatoshis
     *
     * @return self
     */
    public function setNumSatoshis($numSatoshis = null)
    {
        $this->numSatoshis = $numSatoshis;
        return $this;
    }
    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * @param string $timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp = null)
    {
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * @return string
     */
    public function getExpiry()
    {
        return $this->expiry;
    }
    /**
     * @param string $expiry
     *
     * @return self
     */
    public function setExpiry($expiry = null)
    {
        $this->expiry = $expiry;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description = null)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescriptionHash()
    {
        return $this->descriptionHash;
    }
    /**
     * @param string $descriptionHash
     *
     * @return self
     */
    public function setDescriptionHash($descriptionHash = null)
    {
        $this->descriptionHash = $descriptionHash;
        return $this;
    }
    /**
     * @return string
     */
    public function getFallbackAddr()
    {
        return $this->fallbackAddr;
    }
    /**
     * @param string $fallbackAddr
     *
     * @return self
     */
    public function setFallbackAddr($fallbackAddr = null)
    {
        $this->fallbackAddr = $fallbackAddr;
        return $this;
    }
    /**
     * @return string
     */
    public function getCltvExpiry()
    {
        return $this->cltvExpiry;
    }
    /**
     * @param string $cltvExpiry
     *
     * @return self
     */
    public function setCltvExpiry($cltvExpiry = null)
    {
        $this->cltvExpiry = $cltvExpiry;
        return $this;
    }
}
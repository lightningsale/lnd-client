<?php

namespace LightningSale\LndRest\Model;

class Invoice
{
    /**
     * @var string
     */
    protected $memo;
    /**
     * @var string
     */
    protected $receipt;
    /**
     * @var string
     */
    protected $rPreimage;
    /**
     * @var string
     */
    protected $rHash;
    /**
     * @var string
     */
    protected $value;
    /**
     * @var bool
     */
    protected $settled;
    /**
     * @var string
     */
    protected $creationDate;
    /**
     * @var string
     */
    protected $settleDate;
    /**
     * @var string
     */
    protected $paymentRequest;
    /**
     * @var string
     */
    protected $descriptionHash;
    /**
     * @var string
     */
    protected $expiry;
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
    public function getMemo()
    {
        return $this->memo;
    }
    /**
     * @param string $memo
     *
     * @return self
     */
    public function setMemo($memo = null)
    {
        $this->memo = $memo;
        return $this;
    }
    /**
     * @return string
     */
    public function getReceipt()
    {
        return $this->receipt;
    }
    /**
     * @param string $receipt
     *
     * @return self
     */
    public function setReceipt($receipt = null)
    {
        $this->receipt = $receipt;
        return $this;
    }
    /**
     * @return string
     */
    public function getRPreimage()
    {
        return $this->rPreimage;
    }
    /**
     * @param string $rPreimage
     *
     * @return self
     */
    public function setRPreimage($rPreimage = null)
    {
        $this->rPreimage = $rPreimage;
        return $this;
    }
    /**
     * @return string
     */
    public function getRHash()
    {
        return $this->rHash;
    }
    /**
     * @param string $rHash
     *
     * @return self
     */
    public function setRHash($rHash = null)
    {
        $this->rHash = $rHash;
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
     * @return bool
     */
    public function getSettled()
    {
        return $this->settled;
    }
    /**
     * @param bool $settled
     *
     * @return self
     */
    public function setSettled($settled = null)
    {
        $this->settled = $settled;
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
     * @return string
     */
    public function getSettleDate()
    {
        return $this->settleDate;
    }
    /**
     * @param string $settleDate
     *
     * @return self
     */
    public function setSettleDate($settleDate = null)
    {
        $this->settleDate = $settleDate;
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
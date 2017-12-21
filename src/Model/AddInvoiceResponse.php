<?php

namespace LightningSale\LndRest\Model;

class AddInvoiceResponse
{
    /**
     * @var string
     */
    protected $rHash;
    /**
     * @var string
     */
    protected $paymentRequest;
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
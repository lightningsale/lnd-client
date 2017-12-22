<?php

namespace LightningSale\LndRest\Model;

class SendRequest implements \JsonSerializable
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

    public function getDest(): string
    {
        return $this->dest;
    }

    public function getDestString(): string
    {
        return $this->destString;
    }
    public function getAmt(): string
    {
        return $this->amt;
    }

    public function getPaymentHash(): string
    {
        return $this->paymentHash;
    }

    public function getPaymentHashString(): string
    {
        return $this->paymentHashString;
    }

    public function getPaymentRequest(): string
    {
        return $this->paymentRequest;
    }

    public function __construct(string $dest, string $destString, string $amt, string $paymentHash, string $paymentHashString, string $paymentRequest)
    {
        $this->dest = $dest;
        $this->destString = $destString;
        $this->amt = $amt;
        $this->paymentHash = $paymentHash;
        $this->paymentHashString = $paymentHashString;
        $this->paymentRequest = $paymentRequest;
    }

    public function jsonSerialize()
    {
        return [
            'dest' => $this->dest,
            'dest_string' => $this->destString,
            'amt' => $this->amt,
            'payment_hash' => $this->paymentHash,
            'payment_hash_string' => $this->paymentHashString,
            'payment_request' => $this->paymentRequest,
        ];
    }
}
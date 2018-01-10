<?php

namespace LightningSale\LndClient\Model;

class SendRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    protected $destString;
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var string
     */
    protected $paymentHashString;

    public function getDestString(): string
    {
        return $this->destString;
    }
    public function getAmount(): string
    {
        return $this->amount;
    }

    public function getPaymentHashString(): string
    {
        return $this->paymentHashString;
    }

    public function __construct(string $destString, string $amount, string $paymentHashString)
    {
        $this->destString = $destString;
        $this->amount = $amount;
        $this->paymentHashString = $paymentHashString;
    }

    public function jsonSerialize()
    {
        return [
            'dest_string' => $this->destString,
            'amt' => $this->amount,
            'payment_hash_string' => $this->paymentHashString
        ];
    }
}
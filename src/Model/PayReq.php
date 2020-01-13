<?php

namespace LightningSale\LndClient\Model;

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
    protected $cltvExpiry;
    /**
     * @var string
     */
    protected $paymentAddr;
    /**
     * @var string
     */
    protected $numMSat;

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function getPaymentHash(): string
    {
        return $this->paymentHash;
    }

    public function getNumSatoshis(): string
    {
        return $this->numSatoshis;
    }

    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    public function getExpiry(): \DateTime
    {
        return $this->expiry;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCltvExpiry(): string
    {
        return $this->cltvExpiry;
    }

    public function getPaymentAddr()
    {
        return $this->paymentAddr;
    }

    public function getNumMSat()
    {
        return $this->numMSat;
    }

    public function __construct(string $destination, string $paymentHash, string $numSatoshis, string $timestamp, \DateTime $expiry, string $description, string $cltvExpiry, string $paymentAddr, string $numMSat)
    {
        $this->destination = $destination;
        $this->paymentHash = $paymentHash;
        $this->numSatoshis = $numSatoshis;
        $this->timestamp = $timestamp;
        $this->expiry = $expiry;
        $this->description = $description;
        $this->cltvExpiry = $cltvExpiry;
        $this->paymentAddr = $paymentAddr;
        $this->numMSat = $numMSat;
    }


    public static function fromResponse(array $body): self
    {
        return new self(
            $body['destination'],
            $body['payment_hash'],
            $body['num_satoshis'],
            $body['timestamp'],
            \DateTime::createFromFormat("U", $body['timestamp'] + $body['expiry']),
            $body['description'] ?? "",
            $body['cltv_expiry'],
            $body['payment_addr'],
            $body['num_msat']
        );
    }
}
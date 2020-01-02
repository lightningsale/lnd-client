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
     * @var string|null
     */
    protected $descriptionHash;
    /**
     * @var string|null
     */
    protected $fallbackAddr;
    /**
     * @var string
     */
    protected $cltvExpiry;

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

    public function getExpiry(): string
    {
        return $this->expiry;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDescriptionHash(): ?string
    {
        return $this->descriptionHash;
    }

    public function getFallbackAddr(): ?string
    {
        return $this->fallbackAddr;
    }

    public function getCltvExpiry(): string
    {
        return $this->cltvExpiry;
    }

    public function __construct(string $destination, string $paymentHash, string $numSatoshis, string $timestamp, string $expiry, string $description, string $descriptionHash, string $fallbackAddr, string $cltvExpiry)
    {
        $this->destination = $destination;
        $this->paymentHash = $paymentHash;
        $this->numSatoshis = $numSatoshis;
        $this->timestamp = $timestamp;
        $this->expiry = $expiry;
        $this->description = $description;
        $this->descriptionHash = $descriptionHash;
        $this->fallbackAddr = $fallbackAddr;
        $this->cltvExpiry = $cltvExpiry;
    }


    public static function fromResponse(array $body): self
    {
        return new self(
            $body['destination'],
            $body['payment_hash'],
            $body['num_satoshis'],
            $body['timestamp'],
            $body['expiry'],
            $body['description'],
            $body['description_hash'] ?? "",
            $body['fallback_addr'] ?? "",
            $body['cltv_expiry']
        );
    }
}
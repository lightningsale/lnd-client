<?php

namespace LightningSale\LndClient\Model;

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

    public function getRHash(): string
    {
        return $this->rHash;
    }

    public function getPaymentRequest(): string
    {
        return $this->paymentRequest;
    }

    public function __construct(string $rHash, string $paymentRequest)
    {
        $this->rHash = $rHash;
        $this->paymentRequest = $paymentRequest;
    }

    public static function fromResponse(array $body): self
    {
        return new self(
            $body['r_hash'] ?? "",
            $body['payment_request'] ?? ""
        );
    }
}
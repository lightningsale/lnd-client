<?php

namespace LightningSale\LndRest\Model;

class Invoice implements \JsonSerializable
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

    public function getMemo(): string
    {
        return $this->memo;
    }

    public function getReceipt(): string
    {
        return $this->receipt;
    }

    public function getRPreimage(): string
    {
        return $this->rPreimage;
    }

    public function getRHash(): string
    {
        return $this->rHash;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function isSettled(): bool
    {
        return $this->settled;
    }

    public function getCreationDate(): string
    {
        return $this->creationDate;
    }

    public function getSettleDate(): string
    {
        return $this->settleDate;
    }

    public function getPaymentRequest(): string
    {
        return $this->paymentRequest;
    }

    public function getDescriptionHash(): string
    {
        return $this->descriptionHash;
    }

    public function getExpiry(): string
    {
        return $this->expiry;
    }

    public function getFallbackAddr(): string
    {
        return $this->fallbackAddr;
    }

    public function getCltvExpiry(): string
    {
        return $this->cltvExpiry;
    }

    public function __construct(string $memo, string $receipt, string $rPreimage, string $rHash, string $value, bool $settled, string $creationDate, string $settleDate, string $paymentRequest, string $descriptionHash, string $expiry, string $fallbackAddr, string $cltvExpiry)
    {
        $this->memo = $memo;
        $this->receipt = $receipt;
        $this->rPreimage = $rPreimage;
        $this->rHash = $rHash;
        $this->value = $value;
        $this->settled = $settled;
        $this->creationDate = $creationDate;
        $this->settleDate = $settleDate;
        $this->paymentRequest = $paymentRequest;
        $this->descriptionHash = $descriptionHash;
        $this->expiry = $expiry;
        $this->fallbackAddr = $fallbackAddr;
        $this->cltvExpiry = $cltvExpiry;
    }


    public static function fromResponse(array $body): self
    {
        return new self(
            $body['memo'],
            $body['receipt'],
            $body['r_preimage'],
            $body['r_hash'],
            $body['value'],
            $body['settled'],
            $body['creation_date'],
            $body['settle_date'],
            $body['payment_request'],
            $body['description_hash'],
            $body['expiry'],
            $body['fallback_addr'],
            $body['cltv_expiry']
        );
    }

    public function jsonSerialize()
    {
        return [
            'memo' => $this->memo,
            'receipt' => $this->receipt,
            'r_preimage' => $this->rPreimage,
            'r_hash' => $this->rHash,
            'value' => $this->value,
            'settled' => $this->settled,
            'creation_date' => $this->creationDate,
            'settle_date' => $this->settleDate,
            'payment_request' => $this->paymentRequest,
            'description_hash' => $this->descriptionHash,
            'expiry' => $this->expiry,
            'fallback_addr' => $this->fallbackAddr,
            'cltv_expiry' => $this->cltvExpiry,
        ];
    }
}
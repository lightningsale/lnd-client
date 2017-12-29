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
     * @var \DateTime
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

    public function getCreationDate(): \DateTime
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

    public function __construct(string $memo, string $receipt, string $rPreimage, string $rHash, string $value, bool $settled, \DateTime $creationDate, string $settleDate, string $paymentRequest, string $descriptionHash, string $expiry, string $fallbackAddr, string $cltvExpiry)
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

    public static function create(string $memo, string $value, $expiry = 3600): Invoice
    {
        return new self($memo,"","","",$value,false, new \DateTime(), "","","",$expiry,"", "");
    }

    public static function fromResponse(array $body): self
    {
        return new self(
            $body['memo'],
            $body['receipt'] ?? "",
            $body['r_preimage'],
            bin2hex(base64_decode($body['r_hash'])),
            $body['value'],
            $body['settled'] ?? false,
            \DateTime::createFromFormat("U", $body['creation_date']),
            $body['settle_date'] ?? "",
            $body['payment_request'],
            $body['description_hash'] ?? "",
            $body['expiry'],
            $body['fallback_addr'] ?? "",
            $body['cltv_expiry']
        );
    }
}
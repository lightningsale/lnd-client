<?php

namespace LightningSale\LndClient\Model;

class Payment
{
    /**
     * @var string
     */
    protected $paymentHash;
    /**
     * @var string
     */
    protected $value;
    /**
     * @var string
     */
    protected $creationDate;
    /**
     * @var string[]
     */
    protected $path;
    /**
     * @var string
     */
    protected $fee;
    /** @var string  */
    private $paymentPreImage;

    public function getPaymentHash(): string
    {
        return $this->paymentHash;
    }
    
    public function getValue(): string
    {
        return $this->value;
    }
    
    public function getCreationDate(): string
    {
        return $this->creationDate;
    }

    /**
     * @return string[]
     */
    public function getPath(): array
    {
        return $this->path;
    }

    public function getFee(): string
    {
        return $this->fee;
    }

    public function getPaymentPreImage(): string
    {
        return $this->paymentPreImage;
    }

    /**
     * Payment constructor.
     * @param string $paymentHash
     * @param string $value
     * @param string $creationDate
     * @param string[] $path
     * @param string $fee
     */
    public function __construct(string $paymentHash, string $value, string $creationDate, array $path, string $fee, string $paymentPreImage)
    {
        $this->paymentHash = $paymentHash;
        $this->value = $value;
        $this->creationDate = $creationDate;
        $this->path = $path;
        $this->fee = $fee;
        $this->paymentPreImage = $paymentPreImage;
    }
    
    public static function fromResponse(array $data): self
    {
        return new self(
            $data['paymentHash'],
            $data['value'],
            $data['creation_date'],
            $data['path'],
            $data['fee'],
            $data['payment_preimage']
        );
    }
}
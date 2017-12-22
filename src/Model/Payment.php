<?php

namespace LightningSale\LndRest\Model;

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
    
    /**
     * Payment constructor.
     * @param string $paymentHash
     * @param string $value
     * @param string $creationDate
     * @param string[] $path
     * @param string $fee
     */
    public function __construct(string $paymentHash, string $value, string $creationDate, array $path, string $fee)
    {
        $this->paymentHash = $paymentHash;
        $this->value = $value;
        $this->creationDate = $creationDate;
        $this->path = $path;
        $this->fee = $fee;
    }
    
    public static function fromResponse(array $data): self
    {
        return new self(
            $data['paymentHash'],
            $data['value'],
            $data['creation_date'],
            $data['path'],
            $data['fee']
        );
    }
}
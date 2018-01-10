<?php

namespace LightningSale\LndClient\Model;

class HTLC
{
    /**
     * @var bool
     */
    protected $incoming;
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var string
     */
    protected $hashLock;
    /**
     * @var int
     */
    protected $expirationHeight;

    public function isIncoming(): bool
    {
        return $this->incoming;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function getHashLock(): string
    {
        return $this->hashLock;
    }

    public function getExpirationHeight(): int
    {
        return $this->expirationHeight;
    }

    public function __construct(bool $incoming, string $amount, string $hashLock, int $expirationHeight)
    {
        $this->incoming = $incoming;
        $this->amount = $amount;
        $this->hashLock = $hashLock;
        $this->expirationHeight = $expirationHeight;
    }


    public static function fromResponse(array $body): self
    {
        return new self(
            $body['incoming'],
            $body['amount'],
            $body['hash_lock'],
            $body['expiration_height']
        );
    }
}
<?php

namespace LightningSale\LndRest\Model;

class ChannelBalanceResponse
{
    /**
     * @var string
     */
    protected $balance;

    public function getBalance(): string
    {
        return $this->balance;
    }

    public function __construct(string $balance)
    {
        $this->balance = $balance;
    }

    public static function fromResponse(array $body)
    {
        return new self($body['balance']);
    }
}
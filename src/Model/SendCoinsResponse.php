<?php

namespace LightningSale\LndRest\Model;

class SendCoinsResponse
{
    /**
     * @var string
     */
    protected $txid;

    public function getTxid(): string
    {
        return $this->txid;
    }

    public function __construct(string $txid)
    {
        $this->txid = $txid;
    }

    public static function fromResponse($body): self
    {
        return new self($body['txid']);
    }
}
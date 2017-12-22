<?php

namespace LightningSale\LndRest\Model;

class ChannelCloseUpdate
{
    /**
     * @var string
     */
    protected $closingTxid;
    /**
     * @var bool
     */
    protected $success;

    public function getClosingTxid(): string
    {
        return $this->closingTxid;
    }

    public function isSuccess(): bool
    {
        return $this->success;
    }

    public function __construct(string $closingTxid, bool $success)
    {
        $this->closingTxid = $closingTxid;
        $this->success = $success;
    }


    public static function fromResponse($data): self
    {
        return new self(
            $data['closing_txid'],
            $data['success']
        );
    }

}
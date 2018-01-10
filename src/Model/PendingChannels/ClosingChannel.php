<?php

namespace LightningSale\LndClient\Model\PendingChannels;

class ClosingChannel
{
    /**
     * @var PendingChannel
     */
    protected $channel;
    /**
     * @var string
     */
    protected $closingTxid;

    public function getChannel(): PendingChannel
    {
        return $this->channel;
    }

    public function getClosingTxid(): string
    {
        return $this->closingTxid;
    }

    public function __construct(PendingChannel $channel, string $closingTxid)
    {
        $this->channel = $channel;
        $this->closingTxid = $closingTxid;
    }


    public static function fromResponse(array $data): self
    {
        return new self(
            PendingChannel::fromResponse($data['channel']),
            $data['closing_txid']
        );
    }

}
<?php

namespace LightningSale\LndClient\Model;

class PendingChannelResponseClosedChannel
{
    /**
     * @var PendingChannelResponsePendingChannel
     */
    protected $channel;
    /**
     * @var string
     */
    protected $closingTxid;

    public function getChannel(): PendingChannelResponsePendingChannel
    {
        return $this->channel;
    }

    public function getClosingTxid(): string
    {
        return $this->closingTxid;
    }

    public function __construct(PendingChannelResponsePendingChannel $channel, string $closingTxid)
    {
        $this->channel = $channel;
        $this->closingTxid = $closingTxid;
    }


    public static function fromResponse(array $data): self
    {
        return new self(
            PendingChannelResponsePendingChannel::fromResponse($data['channel']),
            $data['closing_txid']
        );
    }

}
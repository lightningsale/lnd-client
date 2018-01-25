<?php

namespace LightningSale\LndClient\Model\PendingChannels;

use LightningSale\LndClient\Model\ChannelPoint;

class PendingChannel
{
    /**
     * @var string
     */
    protected $remoteNodePub;
    /**
     * @var ChannelPoint
     */
    protected $channelPoint;
    /**
     * @var string
     */
    protected $capacity;
    /**
     * @var string
     */
    protected $localBalance;
    /**
     * @var string
     */
    protected $remoteBalance;

    public function getRemotePubkey(): string
    {
        return $this->getRemoteNodePub();
    }

    public function getRemoteNodePub(): string
    {
        return $this->remoteNodePub;
    }

    public function getChannelPoint(): ChannelPoint
    {
        return $this->channelPoint;
    }

    public function getFundingTxId(): string
    {
        return $this->channelPoint->getFundingTxid();
    }

    public function getCapacity(): string
    {
        return $this->capacity;
    }

    public function getLocalBalance(): string
    {
        return $this->localBalance;
    }

    public function getRemoteBalance(): string
    {
        return $this->remoteBalance;
    }

    public function __construct(string $remoteNodePub, ChannelPoint $channelPoint, string $capacity, string $localBalance, string $remoteBalance)
    {
        $this->remoteNodePub = $remoteNodePub;
        $this->channelPoint = $channelPoint;
        $this->capacity = $capacity;
        $this->localBalance = $localBalance;
        $this->remoteBalance = $remoteBalance;
    }


    public static function fromResponse($data): self
    {
        [$fundingTx, $outputIndex] = explode(":", $data['channel_point']);

        return new self(
            $data['remote_node_pub'],
            ChannelPoint::fromResponse([
                'funding_txid' => $fundingTx,
                'output_index' => $outputIndex
            ]),
            $data['capacity'],
            $data['local_balance'] ?? "0",
            $data['remote_balance'] ?? "0"
        );
    }
}
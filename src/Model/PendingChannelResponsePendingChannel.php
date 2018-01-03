<?php

namespace LightningSale\LndRest\Model;

class PendingChannelResponsePendingChannel
{
    /**
     * @var string
     */
    protected $remoteNodePub;
    /**
     * @var string
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

    public function getChannelPoint(): string
    {
        return $this->channelPoint;
    }

    public function getFundingTxId(): string
    {
        return substr($this->channelPoint, 0, strpos($this->channelPoint, ":"));
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

    public function __construct(string $remoteNodePub, string $channelPoint, string $capacity, string $localBalance, string $remoteBalance)
    {
        $this->remoteNodePub = $remoteNodePub;
        $this->channelPoint = $channelPoint;
        $this->capacity = $capacity;
        $this->localBalance = $localBalance;
        $this->remoteBalance = $remoteBalance;
    }


    public static function fromResponse($data): self
    {
        return new self(
            $data['remote_node_pub'],
            $data['channel_point'],
            $data['capacity'],
            $data['local_balance'] ?? "0",
            $data['remote_balance'] ?? "0"
        );
    }
}
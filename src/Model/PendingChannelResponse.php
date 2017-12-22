<?php

namespace LightningSale\LndRest\Model;

class PendingChannelResponse
{
    /**
     * @var string
     */
    protected $totalLimboBalance;
    /**
     * @var PendingChannelResponsePendingOpenChannel[]
     */
    protected $pendingOpenChannels;
    /**
     * @var PendingChannelResponseClosedChannel[]
     */
    protected $pendingClosingChannels;
    /**
     * @var PendingChannelResponseForceClosedChannel[]
     */
    protected $pendingForceClosingChannels;

    public function getTotalLimboBalance(): string
    {
        return $this->totalLimboBalance;
    }

    /**
     * @return PendingChannelResponsePendingOpenChannel[]
     */
    public function getPendingOpenChannels(): array
    {
        return $this->pendingOpenChannels;
    }

    /**
     * @return PendingChannelResponseClosedChannel[]
     */
    public function getPendingClosingChannels(): array
    {
        return $this->pendingClosingChannels;
    }

    /**
     * @return PendingChannelResponseForceClosedChannel[]
     */
    public function getPendingForceClosingChannels(): array
    {
        return $this->pendingForceClosingChannels;
    }

    /**
     * PendingChannelResponse constructor.
     * @param string $totalLimboBalance
     * @param PendingChannelResponsePendingOpenChannel[] $pendingOpenChannels
     * @param PendingChannelResponseClosedChannel[] $pendingClosingChannels
     * @param PendingChannelResponseForceClosedChannel[] $pendingForceClosingChannels
     */
    public function __construct(string $totalLimboBalance, array $pendingOpenChannels, array $pendingClosingChannels, array $pendingForceClosingChannels)
    {
        $this->totalLimboBalance = $totalLimboBalance;
        $this->pendingOpenChannels = $pendingOpenChannels;
        $this->pendingClosingChannels = $pendingClosingChannels;
        $this->pendingForceClosingChannels = $pendingForceClosingChannels;
    }

    public static function fromResponse(array $body): self
    {
        return new self(
            $body['total_limbo_balance'],
            array_map(function($i) {return PendingChannelResponsePendingOpenChannel::fromResponse($i);}, $body['pending_open_channels']),
            array_map(function($i) {return PendingChannelResponseClosedChannel::fromResponse($i);}, $body['pending_closing_channels']),
            array_map(function($i) {return PendingChannelResponseForceClosedChannel::fromResponse($i);}, $body['pending_force_closing_channels'])
        );
    }
}
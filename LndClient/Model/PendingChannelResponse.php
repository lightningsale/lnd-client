<?php

namespace LightningSale\LndClient\Model;

use LightningSale\LndClient\Model\PendingChannels\ClosingChannel;
use LightningSale\LndClient\Model\PendingChannels\ForceClosing;
use LightningSale\LndClient\Model\PendingChannels\OpeningChannel;

class PendingChannelResponse
{
    /**
     * @var string
     */
    protected $totalLimboBalance;
    /**
     * @var OpeningChannel[]
     */
    protected $pendingOpenChannels;
    /**
     * @var ClosingChannel[]
     */
    protected $pendingClosingChannels;
    /**
     * @var ForceClosing[]
     */
    protected $pendingForceClosingChannels;

    public function getTotalLimboBalance(): string
    {
        return $this->totalLimboBalance;
    }

    /**
     * @return OpeningChannel[]
     */
    public function getPendingOpenChannels(): array
    {
        return $this->pendingOpenChannels;
    }

    /**
     * @return ClosingChannel[]
     */
    public function getPendingClosingChannels(): array
    {
        return $this->pendingClosingChannels;
    }

    /**
     * @return ForceClosing[]
     */
    public function getPendingForceClosingChannels(): array
    {
        return $this->pendingForceClosingChannels;
    }

    /**
     * PendingChannelResponse constructor.
     * @param string $totalLimboBalance
     * @param OpeningChannel[] $pendingOpenChannels
     * @param ClosingChannel[] $pendingClosingChannels
     * @param ForceClosing[] $pendingForceClosingChannels
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
            $body['total_limbo_balance'] ?? 0,
            array_map(function($i) {return OpeningChannel::fromResponse($i);}, $body['pending_open_channels'] ?? []),
            array_map(function($i) {return ClosingChannel::fromResponse($i);}, $body['pending_closing_channels'] ?? []),
            array_map(function($i) {return ForceClosing::fromResponse($i);}, $body['pending_force_closing_channels'] ?? [])
        );
    }
}
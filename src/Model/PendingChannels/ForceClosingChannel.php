<?php

namespace LightningSale\LndClient\Model\PendingChannels;

class ForceClosingChannel
{
    /**
     * @var PendingChannel
     */
    protected $channel;
    /**
     * @var string
     */
    protected $closingTxid;
    /**
     * @var string
     */
    protected $limboBalance;
    /**
     * @var int
     */
    protected $maturityHeight;
    /**
     * @var int
     */
    protected $blocksTilMaturity;
    /**
     * @var string
     */
    protected $recoveredBalance;
    /**
     * @var PendingHTLC[]
     */
    protected $pendingHtlcs;

    public function getChannel(): PendingChannel
    {
        return $this->channel;
    }

    public function getClosingTxid(): string
    {
        return $this->closingTxid;
    }

    public function getLimboBalance(): string
    {
        return $this->limboBalance;
    }

    public function getMaturityHeight(): int
    {
        return $this->maturityHeight;
    }

    public function getBlocksTilMaturity(): int
    {
        return $this->blocksTilMaturity;
    }

    public function getRecoveredBalance(): string
    {
        return $this->recoveredBalance;
    }

    /**
     * @return PendingHTLC[]
     */
    public function getPendingHtlcs(): array
    {
        return $this->pendingHtlcs;
    }

    /**
     * PendingChannelResponseForceClosedChannel constructor.
     * @param PendingChannel $channel
     * @param string $closingTxid
     * @param string $limboBalance
     * @param int $maturityHeight
     * @param int $blocksTilMaturity
     * @param string $recoveredBalance
     * @param PendingHTLC[] $pendingHtlcs
     */
    public function __construct(PendingChannel $channel, string $closingTxid, string $limboBalance, int $maturityHeight, int $blocksTilMaturity, string $recoveredBalance, array $pendingHtlcs)
    {
        $this->channel = $channel;
        $this->closingTxid = $closingTxid;
        $this->limboBalance = $limboBalance;
        $this->maturityHeight = $maturityHeight;
        $this->blocksTilMaturity = $blocksTilMaturity;
        $this->recoveredBalance = $recoveredBalance;
        $this->pendingHtlcs = $pendingHtlcs;
    }

    public static function fromResponse($data): self
    {
        return new self(
            PendingChannel::fromResponse($data['channel']),
            $data['closing_txid'],
            $data['limbo_balance'],
            $data['maturity_height'] ?? 0,
            $data['blocks_til_maturity'] ?? 0,
            $data['recovered_balance'] ?? 0,
            array_map(function(array $d) {return PendingHTLC::fromResponse($d);}, $data['pending_htlcs'] ?? [])
        );
    }
}
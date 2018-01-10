<?php

namespace LightningSale\LndClient\Model;

class PendingHTLC
{
    /**
     * @var bool
     */
    protected $incoming;
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var string
     */
    protected $outpoint;
    /**
     * @var int
     */
    protected $maturityHeight;
    /**
     * @var int
     */
    protected $blocksTilMaturity;
    /**
     * @var int
     */
    protected $stage;

    public function isIncoming(): bool
    {
        return $this->incoming;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function getOutpoint(): string
    {
        return $this->outpoint;
    }

    public function getMaturityHeight(): int
    {
        return $this->maturityHeight;
    }

    public function getBlocksTilMaturity(): int
    {
        return $this->blocksTilMaturity;
    }

    public function getStage(): int
    {
        return $this->stage;
    }

    public function __construct(bool $incoming, string $amount, string $outpoint, int $maturityHeight, int $blocksTilMaturity, int $stage)
    {
        $this->incoming = $incoming;
        $this->amount = $amount;
        $this->outpoint = $outpoint;
        $this->maturityHeight = $maturityHeight;
        $this->blocksTilMaturity = $blocksTilMaturity;
        $this->stage = $stage;
    }

    public static function fromResponse(array $data): self
    {
        return new self(
            $data['incoming'],
            $data['amount'],
            $data['outpoint'],
            $data['maturity_height'],
            $data['blocks_til_maturity'],
            $data['stage']
        );
    }
}
<?php

namespace LightningSale\LndClient\Model\PendingChannels;

class OpeningChannel
{
    /**
     * @var PendingChannel
     */
    protected $channel;
    /**
     * @var int
     */
    protected $confirmationHeight;
    /**
     * @var int
     */
    protected $blocksTillOpen;
    /**
     * @var string
     */
    protected $commitFee;
    /**
     * @var string
     */
    protected $commitWeight;
    /**
     * @var string
     */
    protected $feePerKw;

    /**
     * @return PendingChannel
     */
    public function getChannel(): PendingChannel
    {
        return $this->channel;
    }

    public function getConfirmationHeight(): int
    {
        return $this->confirmationHeight;
    }

    public function getBlocksTillOpen(): int
    {
        return $this->blocksTillOpen;
    }

    public function getCommitFee(): string
    {
        return $this->commitFee;
    }

    public function getCommitWeight(): string
    {
        return $this->commitWeight;
    }

    public function getFeePerKw(): string
    {
        return $this->feePerKw;
    }

    public function __construct(PendingChannel $channel, int $confirmationHeight, int $blocksTillOpen, string $commitFee, string $commitWeight, string $feePerKw)
    {
        $this->channel = $channel;
        $this->confirmationHeight = $confirmationHeight;
        $this->blocksTillOpen = $blocksTillOpen;
        $this->commitFee = $commitFee;
        $this->commitWeight = $commitWeight;
        $this->feePerKw = $feePerKw;
    }


    public static function fromResponse(array $data): self
    {
        return new self(
            PendingChannel::fromResponse($data['channel']),
            $data['confirmation_height'] ?? 0,
            $data['blocks_till_open'] ?? -1,
            $data['commit_fee'],
            $data['commit_weight'],
            $data['fee_per_kw']
        );
    }
}

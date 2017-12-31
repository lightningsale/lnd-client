<?php

namespace LightningSale\LndRest\Model;

class PendingChannelResponsePendingOpenChannel
{
    /**
     * @var PendingChannelResponsePendingChannel
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
     * @return PendingChannelResponsePendingChannel
     */
    public function getChannel(): PendingChannelResponsePendingChannel
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

    public function __construct(PendingChannelResponsePendingChannel $channel, int $confirmationHeight, int $blocksTillOpen, string $commitFee, string $commitWeight, string $feePerKw)
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
            PendingChannelResponsePendingChannel::fromResponse($data['channel']),
            $data['confirmation_height'] ?? 0,
            $data['blocks_till_open'],
            $data['commit_fee'],
            $data['commit_weight'],
            $data['fee_per_kw']
        );
    }
}

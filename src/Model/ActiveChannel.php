<?php

namespace LightningSale\LndRest\Model;

class ActiveChannel
{
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var string
     */
    protected $remotePubkey;
    /**
     * @var string
     */
    protected $channelPoint;
    /**
     * @var string
     */
    protected $chanId;
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
     * @var string
     */
    protected $unsettledBalance;
    /**
     * @var string
     */
    protected $totalSatoshisSent;
    /**
     * @var string
     */
    protected $totalSatoshisReceived;
    /**
     * @var string
     */
    protected $numUpdates;
    /**
     * @var HTLC[]
     */
    protected $pendingHtlcs;
    /**
     * @var int
     */
    protected $csvDelay;

    public function isActive(): bool
    {
        return $this->active;
    }

    public function getRemotePubkey(): string
    {
        return $this->remotePubkey;
    }

    public function getChannelPoint(): string
    {
        return $this->channelPoint;
    }

    public function getChanId(): string
    {
        return $this->chanId;
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

    public function getUnsettledBalance(): string
    {
        return $this->unsettledBalance;
    }

    public function getTotalSatoshisSent(): string
    {
        return $this->totalSatoshisSent;
    }

    public function getTotalSatoshisReceived(): string
    {
        return $this->totalSatoshisReceived;
    }

    public function getNumUpdates(): string
    {
        return $this->numUpdates;
    }

    /**
     * @return HTLC[]
     */
    public function getPendingHtlcs(): array
    {
        return $this->pendingHtlcs;
    }

    public function getCsvDelay(): int
    {
        return $this->csvDelay;
    }

    public function __construct(bool $active, string $remotePubkey, string $channelPoint, string $chanId, string $capacity, string $localBalance, string $remoteBalance, string $commitFee, string $commitWeight, string $feePerKw, string $unsettledBalance, string $totalSatoshisSent, string $totalSatoshisReceived, string $numUpdates, array $pendingHtlcs, int $csvDelay)
    {
        $this->active = $active;
        $this->remotePubkey = $remotePubkey;
        $this->channelPoint = $channelPoint;
        $this->chanId = $chanId;
        $this->capacity = $capacity;
        $this->localBalance = $localBalance;
        $this->remoteBalance = $remoteBalance;
        $this->commitFee = $commitFee;
        $this->commitWeight = $commitWeight;
        $this->feePerKw = $feePerKw;
        $this->unsettledBalance = $unsettledBalance;
        $this->totalSatoshisSent = $totalSatoshisSent;
        $this->totalSatoshisReceived = $totalSatoshisReceived;
        $this->numUpdates = $numUpdates;
        $this->pendingHtlcs = $pendingHtlcs;
        $this->csvDelay = $csvDelay;
    }


    public static function fromResponse($data): self
    {
        return new self(
            $data['active'] ?? false,
            $data['remote_pubkey'],
            $data['channel_point'],
            $data['chan_id'] ?? "",
            $data['capacity'],
            $data['local_balance'] ?? 0,
            $data['remote_balance'] ?? 0,
            $data['commit_fee'],
            $data['commit_weight'],
            $data['fee_per_kw'],
            $data['unsettled_balance'] ?? 0,
            $data['total_satoshis_sent'] ?? 0,
            $data['total_satoshis_received'] ?? 0,
            $data['num_updates'] ?? 0,
            array_map(function($f) {return HTLC::fromResponse($f);},$data['pending_htlcs'] ?? []),
            $data['csv_delay']
        );
    }

}
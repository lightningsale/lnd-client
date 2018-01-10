<?php

namespace LightningSale\LndClient\Model;

class RoutingPolicy
{
    /**
     * @var int
     */
    protected $timeLockDelta;
    /**
     * @var string
     */
    protected $minHtlc;
    /**
     * @var string
     */
    protected $feeBaseMsat;
    /**
     * @var string
     */
    protected $feeRateMilliMsat;

    public function getTimeLockDelta(): int
    {
        return $this->timeLockDelta;
    }

    public function getMinHtlc(): string
    {
        return $this->minHtlc;
    }

    public function getFeeBaseMsat(): string
    {
        return $this->feeBaseMsat;
    }

    public function getFeeRateMilliMsat(): string
    {
        return $this->feeRateMilliMsat;
    }

    public function __construct(int $timeLockDelta, string $minHtlc, string $feeBaseMsat, string $feeRateMilliMsat)
    {
        $this->timeLockDelta = $timeLockDelta;
        $this->minHtlc = $minHtlc;
        $this->feeBaseMsat = $feeBaseMsat;
        $this->feeRateMilliMsat = $feeRateMilliMsat;
    }

    public static function fromResponse(array $data): RoutingPolicy
    {
        return new self(
            $data['time_lock_delta'],
            $data['min_htlc'] ?? "",
            $data['fee_base_msat'] ?? "",
            $data['fee_rate_milli_msat'] ?? ""
        );
    }
}
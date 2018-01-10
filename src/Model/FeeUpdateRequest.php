<?php

namespace LightningSale\LndClient\Model;

class FeeUpdateRequest implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected $global;
    /**
     * @var ChannelPoint
     */
    protected $chanPoint;
    /**
     * @var string
     */
    protected $baseFeeMsat;
    /**
     * @var float
     */
    protected $feeRate;

    public function isGlobal(): bool
    {
        return $this->global;
    }

    public function getChanPoint(): ChannelPoint
    {
        return $this->chanPoint;
    }

    public function getBaseFeeMsat(): string
    {
        return $this->baseFeeMsat;
    }

    public function getFeeRate(): float
    {
        return $this->feeRate;
    }

    public function __construct(bool $global, ChannelPoint $chanPoint, string $baseFeeMsat, float $feeRate)
    {
        $this->global = $global;
        $this->chanPoint = $chanPoint;
        $this->baseFeeMsat = $baseFeeMsat;
        $this->feeRate = $feeRate;
    }

    public function jsonSerialize()
    {
        return [
            'global' => $this->global,
            'chan_point' => $this->chanPoint,
            'base_fee_msat' => $this->baseFeeMsat,
            'fee_rate' => $this->feeRate,
        ];
    }
}
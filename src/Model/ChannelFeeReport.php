<?php

namespace LightningSale\LndRest\Model;

class ChannelFeeReport
{
    /**
     * @var string
     */
    protected $chanPoint;
    /**
     * @var string
     */
    protected $baseFeeMsat;
    /**
     * @var string
     */
    protected $feePerMil;
    /**
     * @var float
     */
    protected $feeRate;

    public function getChanPoint(): string
    {
        return $this->chanPoint;
    }

    public function getBaseFeeMsat(): string
    {
        return $this->baseFeeMsat;
    }

    public function getFeePerMil(): string
    {
        return $this->feePerMil;
    }

    public function getFeeRate(): float
    {
        return $this->feeRate;
    }

    public function __construct(string $chanPoint, string $baseFeeMsat, string $feePerMil, float $feeRate)
    {
        $this->chanPoint = $chanPoint;
        $this->baseFeeMsat = $baseFeeMsat;
        $this->feePerMil = $feePerMil;
        $this->feeRate = $feeRate;
    }


    public static function fromResponse($data): self
    {
        return new self(
            $data['chan_point'],
            $data['base_fee _msat'],
            $data['fee_per_mil'],
            $data['fee_rate']
        );
    }
}
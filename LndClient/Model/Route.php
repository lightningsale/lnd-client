<?php

namespace LightningSale\LndClient\Model;

class Route
{
    /**
     * @var int
     */
    protected $totalTimeLock;
    /**
     * @var string
     */
    protected $totalFees;
    /**
     * @var string
     */
    protected $totalAmt;
    /**
     * @var Hop[]
     */
    protected $hops;

    public function getTotalTimeLock(): int
    {
        return $this->totalTimeLock;
    }

    public function getTotalFees(): string
    {
        return $this->totalFees;
    }

    public function getTotalAmt(): string
    {
        return $this->totalAmt;
    }

    /**
     * @return Hop[]
     */
    public function getHops(): array
    {
        return $this->hops;
    }

    /**
     * Route constructor.
     * @param int $totalTimeLock
     * @param string $totalFees
     * @param string $totalAmt
     * @param Hop[] $hops
     */
    public function __construct(int $totalTimeLock, string $totalFees, string $totalAmt, array $hops)
    {
        $this->totalTimeLock = $totalTimeLock;
        $this->totalFees = $totalFees;
        $this->totalAmt = $totalAmt;
        $this->hops = $hops;
    }


    public static function fromResponse($data): self
    {
        return new self(
            $data['total_time_lock'],
            $data['total_fees'] ?? 0,
            $data['total_amt'],
            array_map(function($i) {return Hop::fromResponse($i);}, $data['hops'])
        );
    }
}
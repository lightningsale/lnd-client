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
    protected $totalAmt;
    /**
     * @var Hop
     */
    protected $hops;
    /**
     * @var string
     */
    protected $totalAmtMsat;

    /**
     * @return int
     */
    public function getTotalTimeLock(): int
    {
        return $this->totalTimeLock;
    }

    /**
     * @return string
     */
    public function getTotalAmt(): string
    {
        return $this->totalAmt;
    }

    /**
     * @return Hop[]
     */
    public function getHops(): Hop
    {
        return $this->hops;
    }

    /**
     * @return string
     */
    public function getTotalAmtMsat(): string
    {
        return $this->totalAmtMsat;
    }

    /**
     * Route constructor.
     * @param int $totalTimeLock
     * @param string $totalAmtMsat
     * @param string $totalAmt
     * @param Hop[] $hops
     */
    public function __construct(int $totalTimeLock, string $totalAmt, Hop $hops, string $totalAmtMsat)
    {
        $this->totalTimeLock = $totalTimeLock;
        $this->totalAmt = $totalAmt;
        $this->hops = $hops;
        $this->totalAmtMsat = $totalAmtMsat;
    }


    public static function fromResponse(array $data): Route
    {
        return new self(
            $data['total_time_lock'],
            $data['total_amt'],
            Hop::fromResponse($data['hops']),
            $data['total_amt_msat']
        );
    }
}
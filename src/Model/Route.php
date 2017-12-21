<?php

namespace LightningSale\LndRest\Model;

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
    /**
     * @return int
     */
    public function getTotalTimeLock()
    {
        return $this->totalTimeLock;
    }
    /**
     * @param int $totalTimeLock
     *
     * @return self
     */
    public function setTotalTimeLock($totalTimeLock = null)
    {
        $this->totalTimeLock = $totalTimeLock;
        return $this;
    }
    /**
     * @return string
     */
    public function getTotalFees()
    {
        return $this->totalFees;
    }
    /**
     * @param string $totalFees
     *
     * @return self
     */
    public function setTotalFees($totalFees = null)
    {
        $this->totalFees = $totalFees;
        return $this;
    }
    /**
     * @return string
     */
    public function getTotalAmt()
    {
        return $this->totalAmt;
    }
    /**
     * @param string $totalAmt
     *
     * @return self
     */
    public function setTotalAmt($totalAmt = null)
    {
        $this->totalAmt = $totalAmt;
        return $this;
    }
    /**
     * @return Hop[]
     */
    public function getHops()
    {
        return $this->hops;
    }
    /**
     * @param Hop[] $hops
     *
     * @return self
     */
    public function setHops(array $hops = null)
    {
        $this->hops = $hops;
        return $this;
    }
}
<?php

namespace LightningSale\LndRest\Model;

class WalletBalanceResponse
{
    /**
     * @var string
     */
    protected $totalBalance;
    /**
     * @var string
     */
    protected $confirmedBalance;
    /**
     * @var string
     */
    protected $unconfirmedBalance;
    /**
     * @return string
     */
    public function getTotalBalance()
    {
        return $this->totalBalance;
    }
    /**
     * @param string $totalBalance
     *
     * @return self
     */
    public function setTotalBalance($totalBalance = null)
    {
        $this->totalBalance = $totalBalance;
        return $this;
    }
    /**
     * @return string
     */
    public function getConfirmedBalance()
    {
        return $this->confirmedBalance;
    }
    /**
     * @param string $confirmedBalance
     *
     * @return self
     */
    public function setConfirmedBalance($confirmedBalance = null)
    {
        $this->confirmedBalance = $confirmedBalance;
        return $this;
    }
    /**
     * @return string
     */
    public function getUnconfirmedBalance()
    {
        return $this->unconfirmedBalance;
    }
    /**
     * @param string $unconfirmedBalance
     *
     * @return self
     */
    public function setUnconfirmedBalance($unconfirmedBalance = null)
    {
        $this->unconfirmedBalance = $unconfirmedBalance;
        return $this;
    }
}
<?php

namespace LightningSale\LndRest\Model;

class ChannelBalanceResponse
{
    /**
     * @var string
     */
    protected $balance;
    /**
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }
    /**
     * @param string $balance
     *
     * @return self
     */
    public function setBalance($balance = null)
    {
        $this->balance = $balance;
        return $this;
    }
}
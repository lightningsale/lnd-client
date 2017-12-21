<?php

namespace LightningSale\LndRest\Model;

class TransactionDetails
{
    /**
     * @var Transaction[]
     */
    protected $transactions;
    /**
     * @return Transaction[]
     */
    public function getTransactions()
    {
        return $this->transactions;
    }
    /**
     * @param Transaction[] $transactions
     *
     * @return self
     */
    public function setTransactions(array $transactions = null)
    {
        $this->transactions = $transactions;
        return $this;
    }
}
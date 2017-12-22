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
    public function getTransactions(): array
    {
        return $this->transactions;
    }

    /**
     * TransactionDetails constructor.
     * @param Transaction[] $transactions
     */
    public function __construct(array $transactions)
    {
        $this->transactions = $transactions;
    }


    public static function fromResponse($body): self
    {
        return new self(
            array_map(function($f) {return Transaction::fromResponse($f);}, $body['transactions'])
        );
    }
}
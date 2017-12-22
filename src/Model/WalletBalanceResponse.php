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

    public function getTotalBalance(): string
    {
        return $this->totalBalance;
    }

    public function getConfirmedBalance(): string
    {
        return $this->confirmedBalance;
    }


    public function getUnconfirmedBalance(): string
    {
        return $this->unconfirmedBalance;
    }

    public function __construct(string $totalBalance, string $confirmedBalance, string $unconfirmedBalance)
    {
        $this->totalBalance = $totalBalance;
        $this->confirmedBalance = $confirmedBalance;
        $this->unconfirmedBalance = $unconfirmedBalance;
    }


    public static function fromResponse(array $body): self
    {
        return new self(
            $body['total_balance'],
            $body['confirmed_balance'],
            $body['unconfirmed_balance']
        );
    }
}
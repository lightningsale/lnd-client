<?php

namespace LightningSale\LndRest\Model;

class ListPaymentsResponse
{
    /**
     * @var Payment[]
     */
    protected $payments;
    /**
     * @return Payment[]
     */
    public function getPayments()
    {
        return $this->payments;
    }
    /**
     * @param Payment[] $payments
     *
     * @return self
     */
    public function setPayments(array $payments = null)
    {
        $this->payments = $payments;
        return $this;
    }
}
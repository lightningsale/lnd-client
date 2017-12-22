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
     * ListPaymentsResponse constructor.
     * @param Payment[] $payments
     */
    public function __construct(array $payments)
    {
        $this->payments = $payments;
    }
    
    public static function fromResponse(array $body): self
    {
        return new self(
            array_map(function($f) {return Payment::fromResponse($f);}, $body['payments'])
        );
    }

}
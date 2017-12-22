<?php

namespace LightningSale\LndRest\Model;

class ListInvoiceResponse
{
    /**
     * @var Invoice[]
     */
    protected $invoices;

    /**
     * @return Invoice[]
     */
    public function getInvoices(): array
    {
        return $this->invoices;
    }

    /**
     * ListInvoiceResponse constructor.
     * @param Invoice[] $invoices
     */
    public function __construct(array $invoices)
    {
        $this->invoices = $invoices;
    }


    public static function fromResponse($body): self
    {
        return new self(
            array_map(function($f) {return Invoice::fromResponse($f);}, $body['invoices'])
        );
    }
}
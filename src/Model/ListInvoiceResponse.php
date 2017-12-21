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
    public function getInvoices()
    {
        return $this->invoices;
    }
    /**
     * @param Invoice[] $invoices
     *
     * @return self
     */
    public function setInvoices(array $invoices = null)
    {
        $this->invoices = $invoices;
        return $this;
    }
}
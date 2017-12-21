<?php

namespace LightningSale\LndRest\Model;

class SendManyResponse
{
    /**
     * @var string
     */
    protected $txid;
    /**
     * @return string
     */
    public function getTxid()
    {
        return $this->txid;
    }
    /**
     * @param string $txid
     *
     * @return self
     */
    public function setTxid($txid = null)
    {
        $this->txid = $txid;
        return $this;
    }
}
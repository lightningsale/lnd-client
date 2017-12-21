<?php

namespace LightningSale\LndRest\Model;

class HTLC
{
    /**
     * @var bool
     */
    protected $incoming;
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var string
     */
    protected $hashLock;
    /**
     * @var int
     */
    protected $expirationHeight;
    /**
     * @return bool
     */
    public function getIncoming()
    {
        return $this->incoming;
    }
    /**
     * @param bool $incoming
     *
     * @return self
     */
    public function setIncoming($incoming = null)
    {
        $this->incoming = $incoming;
        return $this;
    }
    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * @param string $amount
     *
     * @return self
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * @return string
     */
    public function getHashLock()
    {
        return $this->hashLock;
    }
    /**
     * @param string $hashLock
     *
     * @return self
     */
    public function setHashLock($hashLock = null)
    {
        $this->hashLock = $hashLock;
        return $this;
    }
    /**
     * @return int
     */
    public function getExpirationHeight()
    {
        return $this->expirationHeight;
    }
    /**
     * @param int $expirationHeight
     *
     * @return self
     */
    public function setExpirationHeight($expirationHeight = null)
    {
        $this->expirationHeight = $expirationHeight;
        return $this;
    }
}
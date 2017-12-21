<?php

namespace LightningSale\LndRest\Model;

class LightningAddress
{
    /**
     * @var string
     */
    protected $pubkey;
    /**
     * @var string
     */
    protected $host;
    /**
     * @return string
     */
    public function getPubkey()
    {
        return $this->pubkey;
    }
    /**
     * @param string $pubkey
     *
     * @return self
     */
    public function setPubkey($pubkey = null)
    {
        $this->pubkey = $pubkey;
        return $this;
    }
    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }
    /**
     * @param string $host
     *
     * @return self
     */
    public function setHost($host = null)
    {
        $this->host = $host;
        return $this;
    }
}
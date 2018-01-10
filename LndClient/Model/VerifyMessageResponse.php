<?php

namespace LightningSale\LndClient\Model;

class VerifyMessageResponse
{
    /**
     * @var bool
     */
    protected $valid;
    /**
     * @var string
     */
    protected $pubkey;
    /**
     * @return bool
     */
    public function getValid()
    {
        return $this->valid;
    }
    /**
     * @param bool $valid
     *
     * @return self
     */
    public function setValid($valid = null)
    {
        $this->valid = $valid;
        return $this;
    }
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
}
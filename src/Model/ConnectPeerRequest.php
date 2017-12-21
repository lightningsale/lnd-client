<?php

namespace LightningSale\LndRest\Model;

class ConnectPeerRequest
{
    /**
     * @var LightningAddress
     */
    protected $addr;
    /**
     * @var bool
     */
    protected $perm;
    /**
     * @return LightningAddress
     */
    public function getAddr()
    {
        return $this->addr;
    }
    /**
     * @param LightningAddress $addr
     *
     * @return self
     */
    public function setAddr(LightningAddress $addr = null)
    {
        $this->addr = $addr;
        return $this;
    }
    /**
     * @return bool
     */
    public function getPerm()
    {
        return $this->perm;
    }
    /**
     * @param bool $perm
     *
     * @return self
     */
    public function setPerm($perm = null)
    {
        $this->perm = $perm;
        return $this;
    }
}
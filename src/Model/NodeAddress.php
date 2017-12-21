<?php

namespace LightningSale\LndRest\Model;

class NodeAddress
{
    /**
     * @var string
     */
    protected $network;
    /**
     * @var string
     */
    protected $addr;
    /**
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }
    /**
     * @param string $network
     *
     * @return self
     */
    public function setNetwork($network = null)
    {
        $this->network = $network;
        return $this;
    }
    /**
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }
    /**
     * @param string $addr
     *
     * @return self
     */
    public function setAddr($addr = null)
    {
        $this->addr = $addr;
        return $this;
    }
}
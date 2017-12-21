<?php

namespace LightningSale\LndRest\Model;

class LightningNode
{
    /**
     * @var int
     */
    protected $lastUpdate;
    /**
     * @var string
     */
    protected $pubKey;
    /**
     * @var string
     */
    protected $alias;
    /**
     * @var NodeAddress[]
     */
    protected $addresses;
    /**
     * @var string
     */
    protected $color;
    /**
     * @return int
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }
    /**
     * @param int $lastUpdate
     *
     * @return self
     */
    public function setLastUpdate($lastUpdate = null)
    {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }
    /**
     * @return string
     */
    public function getPubKey()
    {
        return $this->pubKey;
    }
    /**
     * @param string $pubKey
     *
     * @return self
     */
    public function setPubKey($pubKey = null)
    {
        $this->pubKey = $pubKey;
        return $this;
    }
    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }
    /**
     * @param string $alias
     *
     * @return self
     */
    public function setAlias($alias = null)
    {
        $this->alias = $alias;
        return $this;
    }
    /**
     * @return NodeAddress[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
    /**
     * @param NodeAddress[] $addresses
     *
     * @return self
     */
    public function setAddresses(array $addresses = null)
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * @param string $color
     *
     * @return self
     */
    public function setColor($color = null)
    {
        $this->color = $color;
        return $this;
    }
}
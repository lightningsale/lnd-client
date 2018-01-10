<?php

namespace LightningSale\LndClient\Model;

class NodeUpdate
{
    /**
     * @var string[]
     */
    protected $addresses;
    /**
     * @var string
     */
    protected $identityKey;
    /**
     * @var string
     */
    protected $globalFeatures;
    /**
     * @var string
     */
    protected $alias;
    /**
     * @return string[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
    /**
     * @param string[] $addresses
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
    public function getIdentityKey()
    {
        return $this->identityKey;
    }
    /**
     * @param string $identityKey
     *
     * @return self
     */
    public function setIdentityKey($identityKey = null)
    {
        $this->identityKey = $identityKey;
        return $this;
    }
    /**
     * @return string
     */
    public function getGlobalFeatures()
    {
        return $this->globalFeatures;
    }
    /**
     * @param string $globalFeatures
     *
     * @return self
     */
    public function setGlobalFeatures($globalFeatures = null)
    {
        $this->globalFeatures = $globalFeatures;
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
}
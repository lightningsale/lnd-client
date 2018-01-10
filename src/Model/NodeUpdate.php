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
    public function getAddresses(): array
    {
        return $this->addresses;
    }
    /**
     * @param string[] $addresses
     *
     * @return self
     */
    public function setAddresses(array $addresses = null): self
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * @return string
     */
    public function getIdentityKey(): string
    {
        return $this->identityKey;
    }
    /**
     * @param string $identityKey
     *
     * @return self
     */
    public function setIdentityKey($identityKey = null): self
    {
        $this->identityKey = $identityKey;
        return $this;
    }
    /**
     * @return string
     */
    public function getGlobalFeatures(): string
    {
        return $this->globalFeatures;
    }
    /**
     * @param string $globalFeatures
     *
     * @return self
     */
    public function setGlobalFeatures($globalFeatures = null): self
    {
        $this->globalFeatures = $globalFeatures;
        return $this;
    }
    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }
    /**
     * @param string $alias
     *
     * @return self
     */
    public function setAlias($alias = null): self
    {
        $this->alias = $alias;
        return $this;
    }
}
<?php

namespace LightningSale\LndRest\Model;

class GetInfoResponse
{
    /**
     * @var string
     */
    protected $identityPubkey;
    /**
     * @var string
     */
    protected $alias;
    /**
     * @var int
     */
    protected $numPendingChannels;
    /**
     * @var int
     */
    protected $numActiveChannels;
    /**
     * @var int
     */
    protected $numPeers;
    /**
     * @var int
     */
    protected $blockHeight;
    /**
     * @var string
     */
    protected $blockHash;
    /**
     * @var bool
     */
    protected $syncedToChain;
    /**
     * @var bool
     */
    protected $testnet;
    /**
     * @var string[]
     */
    protected $chains;
    /**
     * @return string
     */
    public function getIdentityPubkey()
    {
        return $this->identityPubkey;
    }
    /**
     * @param string $identityPubkey
     *
     * @return self
     */
    public function setIdentityPubkey($identityPubkey = null)
    {
        $this->identityPubkey = $identityPubkey;
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
     * @return int
     */
    public function getNumPendingChannels()
    {
        return $this->numPendingChannels;
    }
    /**
     * @param int $numPendingChannels
     *
     * @return self
     */
    public function setNumPendingChannels($numPendingChannels = null)
    {
        $this->numPendingChannels = $numPendingChannels;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumActiveChannels()
    {
        return $this->numActiveChannels;
    }
    /**
     * @param int $numActiveChannels
     *
     * @return self
     */
    public function setNumActiveChannels($numActiveChannels = null)
    {
        $this->numActiveChannels = $numActiveChannels;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumPeers()
    {
        return $this->numPeers;
    }
    /**
     * @param int $numPeers
     *
     * @return self
     */
    public function setNumPeers($numPeers = null)
    {
        $this->numPeers = $numPeers;
        return $this;
    }
    /**
     * @return int
     */
    public function getBlockHeight()
    {
        return $this->blockHeight;
    }
    /**
     * @param int $blockHeight
     *
     * @return self
     */
    public function setBlockHeight($blockHeight = null)
    {
        $this->blockHeight = $blockHeight;
        return $this;
    }
    /**
     * @return string
     */
    public function getBlockHash()
    {
        return $this->blockHash;
    }
    /**
     * @param string $blockHash
     *
     * @return self
     */
    public function setBlockHash($blockHash = null)
    {
        $this->blockHash = $blockHash;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSyncedToChain()
    {
        return $this->syncedToChain;
    }
    /**
     * @param bool $syncedToChain
     *
     * @return self
     */
    public function setSyncedToChain($syncedToChain = null)
    {
        $this->syncedToChain = $syncedToChain;
        return $this;
    }
    /**
     * @return bool
     */
    public function getTestnet()
    {
        return $this->testnet;
    }
    /**
     * @param bool $testnet
     *
     * @return self
     */
    public function setTestnet($testnet = null)
    {
        $this->testnet = $testnet;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getChains()
    {
        return $this->chains;
    }
    /**
     * @param string[] $chains
     *
     * @return self
     */
    public function setChains(array $chains = null)
    {
        $this->chains = $chains;
        return $this;
    }
}
<?php

namespace LightningSale\LndClient\Model;

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
     * @var string[]
     */
    protected $uris;

    public function getIdentityPubkey(): string
    {
        return $this->identityPubkey;
    }

    public function getAlias(): string
    {
        return $this->alias;
    }

    public function getNumPendingChannels(): int
    {
        return $this->numPendingChannels;
    }

    public function getNumActiveChannels(): int
    {
        return $this->numActiveChannels;
    }

    public function getNumPeers(): int
    {
        return $this->numPeers;
    }

    public function getBlockHeight(): int
    {
        return $this->blockHeight;
    }

    public function getBlockHash(): string
    {
        return $this->blockHash;
    }

    public function isSyncedToChain(): bool
    {
        return $this->syncedToChain;
    }

    public function isTestnet(): bool
    {
        return $this->testnet;
    }

    /**
     * @return string[]
     */
    public function getChains(): array
    {
        return $this->chains;
    }

    /**
     * @return string[]
     */
    public function getUris(): array
    {
        return $this->uris;
    }

    public function __construct(string $identityPubkey, string $alias, int $numPendingChannels, int $numActiveChannels, int $numPeers, int $blockHeight, string $blockHash, bool $syncedToChain, bool $testnet, array $chains, array $uris)
    {
        $this->identityPubkey = $identityPubkey;
        $this->alias = $alias;
        $this->numPendingChannels = $numPendingChannels;
        $this->numActiveChannels = $numActiveChannels;
        $this->numPeers = $numPeers;
        $this->blockHeight = $blockHeight;
        $this->blockHash = $blockHash;
        $this->syncedToChain = $syncedToChain;
        $this->testnet = $testnet;
        $this->chains = $chains;
        $this->uris = $uris;
    }

    public static function fromResponse(array $data): GetInfoResponse
    {
        return new self(
            $data['identity_pubkey'],
            $data['alias'] ?? "",
            $data['num_pending_channels'] ?? 0,
            $data['num_active_channels'] ?? 0,
            $data['num_peers'] ?? 0,
            $data['block_height'] ?? 0,
            $data['block_hash'] ?? "",
            $data['synced_to_chain'] ?? false,
            $data['testnet'] ?? false,
            $data['chains'] ?? [],
            $data["uris"] ?? []
        );
    }
}
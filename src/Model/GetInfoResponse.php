<?php

namespace LightningSale\LndRest\Model;

use Psr\Http\Message\ResponseInterface;

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

    public function getChains(): array
    {
        return $this->chains;
    }

    public function __construct(string $identityPubkey, string $alias, int $numPendingChannels, int $numActiveChannels, int $numPeers, int $blockHeight, string $blockHash, bool $syncedToChain, bool $testnet, array $chains)
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
    }

    public static function fromResponse(array $data) {
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
            $data['chains'] ?? []
        );
    }
}
<?php

namespace LightningSale\LndRest\Model;

class OpenChannelRequest implements \JsonSerializable
{
    /**
     * @var int
     */
    protected $targetPeerId;
    /**
     * @var string
     */
    protected $nodePubkey;
    /**
     * @var string
     */
    protected $nodePubkeyString;
    /**
     * @var string
     */
    protected $localFundingAmount;
    /**
     * @var string
     */
    protected $pushSat;
    /**
     * @var int
     */
    protected $targetConf;
    /**
     * @var string
     */
    protected $satPerByte;
    /**
     * @var bool
     */
    protected $private;

    public function getTargetPeerId(): int
    {
        return $this->targetPeerId;
    }

    public function getNodePubkey(): string
    {
        return $this->nodePubkey;
    }
    
    public function getNodePubkeyString(): string
    {
        return $this->nodePubkeyString;
    }
    
    public function getLocalFundingAmount(): string
    {
        return $this->localFundingAmount;
    }
    
    public function getPushSat(): string
    {
        return $this->pushSat;
    }
    
    public function getTargetConf(): int
    {
        return $this->targetConf;
    }
    
    public function getSatPerByte(): string
    {
        return $this->satPerByte;
    }
    
    public function isPrivate(): bool
    {
        return $this->private;
    }
    
    public function __construct(int $targetPeerId, string $nodePubkeyString, string $localFundingAmount, string $pushSat, int $targetConf, string $satPerByte, bool $private)
    {
        $this->targetPeerId = $targetPeerId;
        $this->nodePubkeyString = $nodePubkeyString;
        $this->localFundingAmount = $localFundingAmount;
        $this->pushSat = $pushSat;
        $this->targetConf = $targetConf;
        $this->satPerByte = $satPerByte;
        $this->private = $private;
    }

    public function jsonSerialize()
    {
        return [
            'target_peer_id' => $this->targetPeerId,
            'node_pubkey_string' => $this->nodePubkeyString,
            'local_funding_amount' => $this->localFundingAmount,
            'push_sat' => $this->pushSat,
            'target_conf' => $this->targetConf,
            'sat_per_byte' => $this->satPerByte,
            'private' => $this->private,
        ];
    }


}
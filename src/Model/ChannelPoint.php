<?php

namespace LightningSale\LndRest\Model;

class ChannelPoint implements \JsonSerializable
{
    /**
     * @var string
     */
    protected $fundingTxid;
    /**
     * @var string
     */
    protected $fundingTxidStr;
    /**
     * @var int
     */
    protected $outputIndex;

    public function getFundingTxid(): string
    {
        return $this->fundingTxid;
    }
    
    public function getFundingTxidStr(): string
    {
        return $this->fundingTxidStr;
    }
    
    public function getOutputIndex(): int
    {
        return $this->outputIndex;
    }
    
    public function __construct(string $fundingTxid, int $outputIndex)
    {
        $this->fundingTxid = $fundingTxid;
        $this->fundingTxidStr = bin2hex($fundingTxid);
        $this->outputIndex = $outputIndex;
    }

    public static function fromResponse($body): self
    {
        return new self(
            $body['funding_txid'],
            $body['output_index'] ?? 0
        );
    }

    public function jsonSerialize()
    {
        return [
            'funding_txid' => $this->fundingTxid,
            'funding_txid_str' => $this->fundingTxidStr,
            'output_index' => $this->outputIndex,
        ];
    }
}
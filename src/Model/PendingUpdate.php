<?php

namespace LightningSale\LndRest\Model;

class PendingUpdate
{
    /**
     * @var string
     */
    protected $txid;
    /**
     * @var int
     */
    protected $outputIndex;

    public function getTxid(): string
    {
        return $this->txid;
    }

    public function getOutputIndex(): int
    {
        return $this->outputIndex;
    }

    public function __construct(string $txid, int $outputIndex)
    {
        $this->txid = $txid;
        $this->outputIndex = $outputIndex;
    }

    public static function fromResponse($data): self
    {
        return new self(
            $data['txid'],
            $data['outputIndex']
        );
    }
}
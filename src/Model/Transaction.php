<?php

namespace LightningSale\LndClient\Model;

class Transaction
{
    /**
     * @var string
     */
    protected $txHash;
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var int
     */
    protected $numConfirmations;
    /**
     * @var string
     */
    protected $blockHash;
    /**
     * @var int
     */
    protected $blockHeight;
    /**
     * @var string
     */
    protected $timeStamp;
    /**
     * @var string
     */
    protected $totalFees;
    /**
     * @var string[]
     */
    protected $destAddresses;

    public function getTxHash(): string
    {
        return $this->txHash;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function getNumConfirmations(): int
    {
        return $this->numConfirmations;
    }

    public function getBlockHash(): string
    {
        return $this->blockHash;
    }

    public function getBlockHeight(): int
    {
        return $this->blockHeight;
    }

    public function getTimeStamp(): string
    {
        return $this->timeStamp;
    }

    public function getTotalFees(): string
    {
        return $this->totalFees;
    }

    /**
     * @return string[]
     */
    public function getDestAddresses(): array
    {
        return $this->destAddresses;
    }

    public function __construct(string $txHash, string $amount, int $numConfirmations, string $blockHash, int $blockHeight, string $timeStamp, string $totalFees, array $destAddresses)
    {
        $this->txHash = $txHash;
        $this->amount = $amount;
        $this->numConfirmations = $numConfirmations;
        $this->blockHash = $blockHash;
        $this->blockHeight = $blockHeight;
        $this->timeStamp = $timeStamp;
        $this->totalFees = $totalFees;
        $this->destAddresses = $destAddresses;
    }


    public static function fromResponse(array $data): self
    {
        return new self(
            $data['tx_hash'],
            $data['amount'],
            $data['num_confirmations'],
            $data['block_hash'],
            $data['block_height'],
            $data['time_stamp'],
            $data['total_fees'] ?? 0,
            $data['dest_addresses']
        );
    }
}
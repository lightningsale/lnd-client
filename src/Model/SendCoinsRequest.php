<?php

namespace LightningSale\LndRest\Model;

class SendCoinsRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    protected $addr;
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var int
     */
    protected $targetConf;
    /**
     * @var string
     */
    protected $satPerByte;

    public function getAddr(): string
    {
        return $this->addr;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function getTargetConf(): int
    {
        return $this->targetConf;
    }

    public function getSatPerByte(): string
    {
        return $this->satPerByte;
    }

    public function __construct(string $addr, string $amount, int $targetConf, string $satPerByte)
    {
        $this->addr = $addr;
        $this->amount = $amount;
        $this->targetConf = $targetConf;
        $this->satPerByte = $satPerByte;
    }

    public function jsonSerialize()
    {
        return [
            'addr' => $this->addr,
            'amount' => $this->amount,
            'target_conf' => $this->targetConf,
            'sat_per_byte' => $this->satPerByte,
        ];
    }
}
<?php

namespace LightningSale\LndRest\Model;

class Hop
{
    /**
     * @var string
     */
    protected $chanId;
    /**
     * @var string
     */
    protected $chanCapacity;
    /**
     * @var string
     */
    protected $amtToForward;
    /**
     * @var string
     */
    protected $fee;
    /**
     * @var int
     */
    protected $expiry;

    public function getChanId(): string
    {
        return $this->chanId;
    }

    public function getChanCapacity(): string
    {
        return $this->chanCapacity;
    }

    public function getAmtToForward(): string
    {
        return $this->amtToForward;
    }

    public function getFee(): string
    {
        return $this->fee;
    }

    public function getExpiry(): int
    {
        return $this->expiry;
    }

    public function __construct(string $chanId, string $chanCapacity, string $amtToForward, string $fee, int $expiry)
    {
        $this->chanId = $chanId;
        $this->chanCapacity = $chanCapacity;
        $this->amtToForward = $amtToForward;
        $this->fee = $fee;
        $this->expiry = $expiry;
    }


    public static function fromResponse(array $data): self
    {
        return new self(
            $data['chan_id'],
            $data['chan_capacity'],
            $data['amt_to_forward'],
            $data['fee'],
            $data['expiry']
        );
    }
}
<?php

namespace LightningSale\LndClient\Model;

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
     * @var int
     */
    protected $expiry;
    /**
     * @var string
     */
    protected $amtToForwardMsat;
    /**
     * @var string
     */
    protected $pubKey;

    /**
     * @return string
     */
    public function getChanId(): string
    {
        return $this->chanId;
    }

    /**
     * @return string
     */
    public function getChanCapacity(): string
    {
        return $this->chanCapacity;
    }

    /**
     * @return string
     */
    public function getAmtToForward(): string
    {
        return $this->amtToForward;
    }

    /**
     * @return int
     */
    public function getExpiry(): int
    {
        return $this->expiry;
    }

    /**
     * @return string
     */
    public function getAmtToForwardMsat(): string
    {
        return $this->amtToForwardMsat;
    }

    /**
     * @return string
     */
    public function getPubKey(): string
    {
        return $this->pubKey;
    }

    /**
     * Hop constructor.
     * @param string $chanId
     * @param string $chanCapacity
     * @param string $amtToForward
     * @param int $expiry
     * @param string $amtToForwardMsat
     * @param string $pubKey
     */
    public function __construct($chanId, $chanCapacity, $amtToForward, $expiry, $amtToForwardMsat, $pubKey)
    {
        $this->chanId = $chanId;
        $this->chanCapacity = $chanCapacity;
        $this->amtToForward = $amtToForward;
        $this->expiry = $expiry;
        $this->amtToForwardMsat = $amtToForwardMsat;
        $this->pubKey = $pubKey;
    }

    /**
     * @param array $data
     * @return Hop
     */
    public static function fromResponse(array $data): self
    {
        return new self(
            $data[0]['chan_id'],
            $data[0]['chan_capacity'],
            $data[0]['amt_to_forward'],
            $data[0]['expiry'],
            $data[0]['amt_to_forward_msat'],
            $data[0]['pub_key']
        );
    }
}
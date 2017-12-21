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
    /**
     * @return string
     */
    public function getChanId()
    {
        return $this->chanId;
    }
    /**
     * @param string $chanId
     *
     * @return self
     */
    public function setChanId($chanId = null)
    {
        $this->chanId = $chanId;
        return $this;
    }
    /**
     * @return string
     */
    public function getChanCapacity()
    {
        return $this->chanCapacity;
    }
    /**
     * @param string $chanCapacity
     *
     * @return self
     */
    public function setChanCapacity($chanCapacity = null)
    {
        $this->chanCapacity = $chanCapacity;
        return $this;
    }
    /**
     * @return string
     */
    public function getAmtToForward()
    {
        return $this->amtToForward;
    }
    /**
     * @param string $amtToForward
     *
     * @return self
     */
    public function setAmtToForward($amtToForward = null)
    {
        $this->amtToForward = $amtToForward;
        return $this;
    }
    /**
     * @return string
     */
    public function getFee()
    {
        return $this->fee;
    }
    /**
     * @param string $fee
     *
     * @return self
     */
    public function setFee($fee = null)
    {
        $this->fee = $fee;
        return $this;
    }
    /**
     * @return int
     */
    public function getExpiry()
    {
        return $this->expiry;
    }
    /**
     * @param int $expiry
     *
     * @return self
     */
    public function setExpiry($expiry = null)
    {
        $this->expiry = $expiry;
        return $this;
    }
}
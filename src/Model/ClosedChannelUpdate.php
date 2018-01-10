<?php

namespace LightningSale\LndClient\Model;

class ClosedChannelUpdate
{
    /**
     * @var string
     */
    protected $chanId;
    /**
     * @var string
     */
    protected $capacity;
    /**
     * @var int
     */
    protected $closedHeight;
    /**
     * @var ChannelPoint
     */
    protected $chanPoint;
    /**
     * @return string
     */
    public function getChanId(): string
    {
        return $this->chanId;
    }
    /**
     * @param string $chanId
     *
     * @return self
     */
    public function setChanId($chanId = null): self
    {
        $this->chanId = $chanId;
        return $this;
    }
    /**
     * @return string
     */
    public function getCapacity(): string
    {
        return $this->capacity;
    }
    /**
     * @param string $capacity
     *
     * @return self
     */
    public function setCapacity($capacity = null): self
    {
        $this->capacity = $capacity;
        return $this;
    }
    /**
     * @return int
     */
    public function getClosedHeight(): int
    {
        return $this->closedHeight;
    }
    /**
     * @param int $closedHeight
     *
     * @return self
     */
    public function setClosedHeight($closedHeight = null): self
    {
        $this->closedHeight = $closedHeight;
        return $this;
    }
    /**
     * @return ChannelPoint
     */
    public function getChanPoint(): ChannelPoint
    {
        return $this->chanPoint;
    }
    /**
     * @param ChannelPoint $chanPoint
     *
     * @return self
     */
    public function setChanPoint(ChannelPoint $chanPoint = null): self
    {
        $this->chanPoint = $chanPoint;
        return $this;
    }
}
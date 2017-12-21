<?php

namespace LightningSale\LndRest\Model;

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
    public function getCapacity()
    {
        return $this->capacity;
    }
    /**
     * @param string $capacity
     *
     * @return self
     */
    public function setCapacity($capacity = null)
    {
        $this->capacity = $capacity;
        return $this;
    }
    /**
     * @return int
     */
    public function getClosedHeight()
    {
        return $this->closedHeight;
    }
    /**
     * @param int $closedHeight
     *
     * @return self
     */
    public function setClosedHeight($closedHeight = null)
    {
        $this->closedHeight = $closedHeight;
        return $this;
    }
    /**
     * @return ChannelPoint
     */
    public function getChanPoint()
    {
        return $this->chanPoint;
    }
    /**
     * @param ChannelPoint $chanPoint
     *
     * @return self
     */
    public function setChanPoint(ChannelPoint $chanPoint = null)
    {
        $this->chanPoint = $chanPoint;
        return $this;
    }
}
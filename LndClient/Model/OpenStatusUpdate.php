<?php

namespace LightningSale\LndClient\Model;

class OpenStatusUpdate
{
    /**
     * @var PendingUpdate
     */
    protected $chanPending;
    /**
     * @var ConfirmationUpdate
     */
    protected $confirmation;
    /**
     * @var ChannelOpenUpdate
     */
    protected $chanOpen;
    /**
     * @return PendingUpdate
     */
    public function getChanPending()
    {
        return $this->chanPending;
    }
    /**
     * @param PendingUpdate $chanPending
     *
     * @return self
     */
    public function setChanPending(PendingUpdate $chanPending = null)
    {
        $this->chanPending = $chanPending;
        return $this;
    }
    /**
     * @return ConfirmationUpdate
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }
    /**
     * @param ConfirmationUpdate $confirmation
     *
     * @return self
     */
    public function setConfirmation(ConfirmationUpdate $confirmation = null)
    {
        $this->confirmation = $confirmation;
        return $this;
    }
    /**
     * @return ChannelOpenUpdate
     */
    public function getChanOpen()
    {
        return $this->chanOpen;
    }
    /**
     * @param ChannelOpenUpdate $chanOpen
     *
     * @return self
     */
    public function setChanOpen(ChannelOpenUpdate $chanOpen = null)
    {
        $this->chanOpen = $chanOpen;
        return $this;
    }
}
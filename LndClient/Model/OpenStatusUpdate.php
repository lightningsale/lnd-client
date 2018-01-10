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
    public function getChanPending(): PendingUpdate
    {
        return $this->chanPending;
    }
    /**
     * @param PendingUpdate $chanPending
     *
     * @return self
     */
    public function setChanPending(PendingUpdate $chanPending = null): self
    {
        $this->chanPending = $chanPending;
        return $this;
    }
    /**
     * @return ConfirmationUpdate
     */
    public function getConfirmation(): ConfirmationUpdate
    {
        return $this->confirmation;
    }
    /**
     * @param ConfirmationUpdate $confirmation
     *
     * @return self
     */
    public function setConfirmation(ConfirmationUpdate $confirmation = null): self
    {
        $this->confirmation = $confirmation;
        return $this;
    }
    /**
     * @return ChannelOpenUpdate
     */
    public function getChanOpen(): ChannelOpenUpdate
    {
        return $this->chanOpen;
    }
    /**
     * @param ChannelOpenUpdate $chanOpen
     *
     * @return self
     */
    public function setChanOpen(ChannelOpenUpdate $chanOpen = null): self
    {
        $this->chanOpen = $chanOpen;
        return $this;
    }
}
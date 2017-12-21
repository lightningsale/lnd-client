<?php

namespace LightningSale\LndRest\Model;

class CloseStatusUpdate
{
    /**
     * @var PendingUpdate
     */
    protected $closePending;
    /**
     * @var ConfirmationUpdate
     */
    protected $confirmation;
    /**
     * @var ChannelCloseUpdate
     */
    protected $chanClose;
    /**
     * @return PendingUpdate
     */
    public function getClosePending()
    {
        return $this->closePending;
    }
    /**
     * @param PendingUpdate $closePending
     *
     * @return self
     */
    public function setClosePending(PendingUpdate $closePending = null)
    {
        $this->closePending = $closePending;
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
     * @return ChannelCloseUpdate
     */
    public function getChanClose()
    {
        return $this->chanClose;
    }
    /**
     * @param ChannelCloseUpdate $chanClose
     *
     * @return self
     */
    public function setChanClose(ChannelCloseUpdate $chanClose = null)
    {
        $this->chanClose = $chanClose;
        return $this;
    }
}
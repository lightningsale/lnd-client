<?php

namespace LightningSale\LndClient\Model;

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

    public function getClosePending(): PendingUpdate
    {
        return $this->closePending;
    }

    public function getConfirmation(): ConfirmationUpdate
    {
        return $this->confirmation;
    }

    public function getChanClose(): ChannelCloseUpdate
    {
        return $this->chanClose;
    }

    public function __construct(PendingUpdate $closePending, ConfirmationUpdate $confirmation, ChannelCloseUpdate $chanClose)
    {
        $this->closePending = $closePending;
        $this->confirmation = $confirmation;
        $this->chanClose = $chanClose;
    }


    public static function fromResponse(array $body): self
    {
        return new self(
            PendingUpdate::fromResponse($body['close_pending']),
            ConfirmationUpdate::fromResponse($body['confirmation']),
            ChannelCloseUpdate::fromResponse($body['chan_close'])
        );
    }
}
<?php

namespace LightningSale\LndRest\Model;

class ChannelCloseUpdate
{
    /**
     * @var string
     */
    protected $closingTxid;
    /**
     * @var bool
     */
    protected $success;
    /**
     * @return string
     */
    public function getClosingTxid()
    {
        return $this->closingTxid;
    }
    /**
     * @param string $closingTxid
     *
     * @return self
     */
    public function setClosingTxid($closingTxid = null)
    {
        $this->closingTxid = $closingTxid;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }
    /**
     * @param bool $success
     *
     * @return self
     */
    public function setSuccess($success = null)
    {
        $this->success = $success;
        return $this;
    }
}
<?php

namespace LightningSale\LndRest\Model;

class ConnectPeerResponse
{
    /**
     * @var int
     */
    protected $peerId;
    /**
     * @return int
     */
    public function getPeerId()
    {
        return $this->peerId;
    }
    /**
     * @param int $peerId
     *
     * @return self
     */
    public function setPeerId($peerId = null)
    {
        $this->peerId = $peerId;
        return $this;
    }
}
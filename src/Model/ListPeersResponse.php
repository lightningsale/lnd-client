<?php

namespace LightningSale\LndRest\Model;

class ListPeersResponse
{
    /**
     * @var Peer[]
     */
    protected $peers;
    /**
     * @return Peer[]
     */
    public function getPeers()
    {
        return $this->peers;
    }
    /**
     * @param Peer[] $peers
     *
     * @return self
     */
    public function setPeers(array $peers = null)
    {
        $this->peers = $peers;
        return $this;
    }
}
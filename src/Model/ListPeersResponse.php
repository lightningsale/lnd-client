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
    public function getPeers(): array
    {
        return $this->peers;
    }

    /**
     * ListPeersResponse constructor.
     * @param Peer[] $peers
     */
    public function __construct(array $peers)
    {
        $this->peers = $peers;
    }


    public static function fromResponse($body): self
    {
        return new self(array_map(function ($f) {return Peer::fromResponse($f);}, $body['peers'] ?? []));
    }
}
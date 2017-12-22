<?php

namespace LightningSale\LndRest\Model;

class ConnectPeerResponse
{
    /**
     * @var int
     */
    protected $peerId;

    public function getPeerId(): int
    {
        return $this->peerId;
    }

    public function __construct(int $peerId)
    {
        $this->peerId = $peerId;
    }


    public static function fromResponse(array $body): self
    {
        return new self($body['peer_id'] ?? 0);
    }

}
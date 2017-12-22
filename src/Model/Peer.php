<?php

namespace LightningSale\LndRest\Model;

class Peer
{
    /**
     * @var string
     */
    protected $pubKey;
    /**
     * @var int
     */
    protected $peerId;
    /**
     * @var string
     */
    protected $address;
    /**
     * @var string
     */
    protected $bytesSent;
    /**
     * @var string
     */
    protected $bytesRecv;
    /**
     * @var string
     */
    protected $satSent;
    /**
     * @var string
     */
    protected $satRecv;
    /**
     * @var bool
     */
    protected $inbound;
    /**
     * @var string
     */
    protected $pingTime;

    public function getPubKey(): string
    {
        return $this->pubKey;
    }

    public function getPeerId(): int
    {
        return $this->peerId;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getBytesSent(): string
    {
        return $this->bytesSent;
    }

    public function getBytesRecv(): string
    {
        return $this->bytesRecv;
    }

    public function getSatSent(): string
    {
        return $this->satSent;
    }

    public function getSatRecv(): string
    {
        return $this->satRecv;
    }

    public function isInbound(): bool
    {
        return $this->inbound;
    }

    public function getPingTime(): string
    {
        return $this->pingTime;
    }

    public function __construct(string $pubKey, int $peerId, string $address, string $bytesSent, string $bytesRecv, string $satSent, string $satRecv, bool $inbound, string $pingTime)
    {
        $this->pubKey = $pubKey;
        $this->peerId = $peerId;
        $this->address = $address;
        $this->bytesSent = $bytesSent;
        $this->bytesRecv = $bytesRecv;
        $this->satSent = $satSent;
        $this->satRecv = $satRecv;
        $this->inbound = $inbound;
        $this->pingTime = $pingTime;
    }


    public static function fromResponse($data): self
    {
        return new self(
            $data['pub_key'],
            $data['peer_id'],
            $data['address'],
            $data['bytes_sent'],
            $data['bytes_recv'],
            $data['sat_sent'] ?? 0,
            $data['sat_recv'] ?? 0,
            $data['inbound'],
            $data['ping_time'] ?? -1
        );
    }

}
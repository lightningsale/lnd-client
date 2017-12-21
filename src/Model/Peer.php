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
    /**
     * @return string
     */
    public function getPubKey()
    {
        return $this->pubKey;
    }
    /**
     * @param string $pubKey
     *
     * @return self
     */
    public function setPubKey($pubKey = null)
    {
        $this->pubKey = $pubKey;
        return $this;
    }
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
    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * @param string $address
     *
     * @return self
     */
    public function setAddress($address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * @return string
     */
    public function getBytesSent()
    {
        return $this->bytesSent;
    }
    /**
     * @param string $bytesSent
     *
     * @return self
     */
    public function setBytesSent($bytesSent = null)
    {
        $this->bytesSent = $bytesSent;
        return $this;
    }
    /**
     * @return string
     */
    public function getBytesRecv()
    {
        return $this->bytesRecv;
    }
    /**
     * @param string $bytesRecv
     *
     * @return self
     */
    public function setBytesRecv($bytesRecv = null)
    {
        $this->bytesRecv = $bytesRecv;
        return $this;
    }
    /**
     * @return string
     */
    public function getSatSent()
    {
        return $this->satSent;
    }
    /**
     * @param string $satSent
     *
     * @return self
     */
    public function setSatSent($satSent = null)
    {
        $this->satSent = $satSent;
        return $this;
    }
    /**
     * @return string
     */
    public function getSatRecv()
    {
        return $this->satRecv;
    }
    /**
     * @param string $satRecv
     *
     * @return self
     */
    public function setSatRecv($satRecv = null)
    {
        $this->satRecv = $satRecv;
        return $this;
    }
    /**
     * @return bool
     */
    public function getInbound()
    {
        return $this->inbound;
    }
    /**
     * @param bool $inbound
     *
     * @return self
     */
    public function setInbound($inbound = null)
    {
        $this->inbound = $inbound;
        return $this;
    }
    /**
     * @return string
     */
    public function getPingTime()
    {
        return $this->pingTime;
    }
    /**
     * @param string $pingTime
     *
     * @return self
     */
    public function setPingTime($pingTime = null)
    {
        $this->pingTime = $pingTime;
        return $this;
    }
}
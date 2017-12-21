<?php

namespace LightningSale\LndRest\Model;

class OpenChannelRequest
{
    /**
     * @var int
     */
    protected $targetPeerId;
    /**
     * @var string
     */
    protected $nodePubkey;
    /**
     * @var string
     */
    protected $nodePubkeyString;
    /**
     * @var string
     */
    protected $localFundingAmount;
    /**
     * @var string
     */
    protected $pushSat;
    /**
     * @var int
     */
    protected $targetConf;
    /**
     * @var string
     */
    protected $satPerByte;
    /**
     * @var bool
     */
    protected $private;
    /**
     * @return int
     */
    public function getTargetPeerId()
    {
        return $this->targetPeerId;
    }
    /**
     * @param int $targetPeerId
     *
     * @return self
     */
    public function setTargetPeerId($targetPeerId = null)
    {
        $this->targetPeerId = $targetPeerId;
        return $this;
    }
    /**
     * @return string
     */
    public function getNodePubkey()
    {
        return $this->nodePubkey;
    }
    /**
     * @param string $nodePubkey
     *
     * @return self
     */
    public function setNodePubkey($nodePubkey = null)
    {
        $this->nodePubkey = $nodePubkey;
        return $this;
    }
    /**
     * @return string
     */
    public function getNodePubkeyString()
    {
        return $this->nodePubkeyString;
    }
    /**
     * @param string $nodePubkeyString
     *
     * @return self
     */
    public function setNodePubkeyString($nodePubkeyString = null)
    {
        $this->nodePubkeyString = $nodePubkeyString;
        return $this;
    }
    /**
     * @return string
     */
    public function getLocalFundingAmount()
    {
        return $this->localFundingAmount;
    }
    /**
     * @param string $localFundingAmount
     *
     * @return self
     */
    public function setLocalFundingAmount($localFundingAmount = null)
    {
        $this->localFundingAmount = $localFundingAmount;
        return $this;
    }
    /**
     * @return string
     */
    public function getPushSat()
    {
        return $this->pushSat;
    }
    /**
     * @param string $pushSat
     *
     * @return self
     */
    public function setPushSat($pushSat = null)
    {
        $this->pushSat = $pushSat;
        return $this;
    }
    /**
     * @return int
     */
    public function getTargetConf()
    {
        return $this->targetConf;
    }
    /**
     * @param int $targetConf
     *
     * @return self
     */
    public function setTargetConf($targetConf = null)
    {
        $this->targetConf = $targetConf;
        return $this;
    }
    /**
     * @return string
     */
    public function getSatPerByte()
    {
        return $this->satPerByte;
    }
    /**
     * @param string $satPerByte
     *
     * @return self
     */
    public function setSatPerByte($satPerByte = null)
    {
        $this->satPerByte = $satPerByte;
        return $this;
    }
    /**
     * @return bool
     */
    public function getPrivate()
    {
        return $this->private;
    }
    /**
     * @param bool $private
     *
     * @return self
     */
    public function setPrivate($private = null)
    {
        $this->private = $private;
        return $this;
    }
}
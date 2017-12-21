<?php

namespace LightningSale\LndRest\Model;

class ConfirmationUpdate
{
    /**
     * @var string
     */
    protected $blockSha;
    /**
     * @var int
     */
    protected $blockHeight;
    /**
     * @var int
     */
    protected $numConfsLeft;
    /**
     * @return string
     */
    public function getBlockSha()
    {
        return $this->blockSha;
    }
    /**
     * @param string $blockSha
     *
     * @return self
     */
    public function setBlockSha($blockSha = null)
    {
        $this->blockSha = $blockSha;
        return $this;
    }
    /**
     * @return int
     */
    public function getBlockHeight()
    {
        return $this->blockHeight;
    }
    /**
     * @param int $blockHeight
     *
     * @return self
     */
    public function setBlockHeight($blockHeight = null)
    {
        $this->blockHeight = $blockHeight;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumConfsLeft()
    {
        return $this->numConfsLeft;
    }
    /**
     * @param int $numConfsLeft
     *
     * @return self
     */
    public function setNumConfsLeft($numConfsLeft = null)
    {
        $this->numConfsLeft = $numConfsLeft;
        return $this;
    }
}
<?php

namespace LightningSale\LndClient\Model;

class VerifyMessageResponse
{
    /**
     * @var bool
     */
    protected $valid;
    /**
     * @var string
     */
    protected $pubkey;
    /**
     * @return bool
     */
    public function getValid(): bool
    {
        return $this->valid;
    }
    /**
     * @param bool $valid
     *
     * @return self
     */
    public function setValid($valid = null): self
    {
        $this->valid = $valid;
        return $this;
    }
    /**
     * @return string
     */
    public function getPubkey(): string
    {
        return $this->pubkey;
    }
    /**
     * @param string $pubkey
     *
     * @return self
     */
    public function setPubkey($pubkey = null): self
    {
        $this->pubkey = $pubkey;
        return $this;
    }
}
<?php

namespace LightningSale\LndClient\Model;

class SignMessageResponse
{
    /**
     * @var string
     */
    protected $signature;
    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }
    /**
     * @param string $signature
     *
     * @return self
     */
    public function setSignature($signature = null): self
    {
        $this->signature = $signature;
        return $this;
    }
}
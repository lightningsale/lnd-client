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
    public function getSignature()
    {
        return $this->signature;
    }
    /**
     * @param string $signature
     *
     * @return self
     */
    public function setSignature($signature = null)
    {
        $this->signature = $signature;
        return $this;
    }
}
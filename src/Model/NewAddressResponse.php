<?php

namespace LightningSale\LndRest\Model;

class NewAddressResponse
{
    /**
     * @var string
     */
    protected $address;
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
}
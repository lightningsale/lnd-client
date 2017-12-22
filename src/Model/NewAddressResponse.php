<?php

namespace LightningSale\LndRest\Model;

class NewAddressResponse
{
    /**
     * @var string
     */
    protected $address;

    public function getAddress(): string
    {
        return $this->address;
    }

    public function __construct(string $address)
    {
        $this->address = $address;
    }


    public static function fromResponse(array $body): self
    {
        return new self($body['address']);
    }
}
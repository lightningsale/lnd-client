<?php

namespace LightningSale\LndRest\Model;

class UnlockWalletRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    protected $password;

    public function getPassword(): string
    {
        return $this->password;
    }

    public function __construct(string $password)
    {
        $this->password = $password;
    }

    public function jsonSerialize()
    {
        return [
            'password' => $this->password
        ];
    }
}
<?php

namespace LightningSale\LndRest\Model;

class CreateWalletRequest
{
    /**
     * @var string
     */
    protected $password;
    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password = null)
    {
        $this->password = $password;
        return $this;
    }
}
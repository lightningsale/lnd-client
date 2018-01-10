<?php

namespace LightningSale\LndClient\Model;

class DebugLevelResponse
{
    /**
     * @var string
     */
    protected $subSystems;
    /**
     * @return string
     */
    public function getSubSystems(): string
    {
        return $this->subSystems;
    }
    /**
     * @param string $subSystems
     *
     * @return self
     */
    public function setSubSystems($subSystems = null): self
    {
        $this->subSystems = $subSystems;
        return $this;
    }
}
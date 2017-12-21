<?php

namespace LightningSale\LndRest\Model;

class DebugLevelResponse
{
    /**
     * @var string
     */
    protected $subSystems;
    /**
     * @return string
     */
    public function getSubSystems()
    {
        return $this->subSystems;
    }
    /**
     * @param string $subSystems
     *
     * @return self
     */
    public function setSubSystems($subSystems = null)
    {
        $this->subSystems = $subSystems;
        return $this;
    }
}
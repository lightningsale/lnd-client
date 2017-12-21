<?php

namespace LightningSale\LndRest\Model;

class ListChannelsResponse
{
    /**
     * @var ActiveChannel[]
     */
    protected $channels;
    /**
     * @return ActiveChannel[]
     */
    public function getChannels()
    {
        return $this->channels;
    }
    /**
     * @param ActiveChannel[] $channels
     *
     * @return self
     */
    public function setChannels(array $channels = null)
    {
        $this->channels = $channels;
        return $this;
    }
}
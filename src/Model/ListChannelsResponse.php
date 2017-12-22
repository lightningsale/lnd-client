<?php

namespace LightningSale\LndRest\Model;

use Grpc\Channel;

class ListChannelsResponse
{
    /**
     * @var ActiveChannel[]
     */
    protected $channels;

    /**
     * @return ActiveChannel[]
     */
    public function getChannels(): array
    {
        return $this->channels;
    }

    public function __construct(array $channels)
    {
        $this->channels = $channels;
    }

    public static function fromResponse($body): self
    {
        $channels = [];
        foreach ($body['channels'] ?? [] as $channel)
            $channels[] = ActiveChannel::fromResponse($channel);

        return new self($channels);
    }
}
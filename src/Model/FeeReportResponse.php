<?php

namespace LightningSale\LndRest\Model;

use Psr\Http\Message\ResponseInterface;

class FeeReportResponse
{
    /**
     * @var ChannelFeeReport[]
     */
    protected $channelFees;

    public function __construct(array $channelFees)
    {
        $this->channelFees = $channelFees;
    }

    /**
     * @return ChannelFeeReport[]
     */
    public function getChannelFees(): array
    {
        return $this->channelFees;
    }

    public static function fromResponse(array $body): self
    {
        $channels = [];
        $channelFees = $body['channel_fees'] ?? [];
        foreach ($channelFees as $data)
            $channels[] = ChannelFeeReport::fromResponse($data);

        return new self($channels);
    }
}
<?php

namespace LightningSale\LndRest\Model;

class NetworkInfo
{
    /**
     * @var int
     */
    protected $graphDiameter;
    /**
     * @var float
     */
    protected $avgOutDegree;
    /**
     * @var int
     */
    protected $maxOutDegree;
    /**
     * @var int
     */
    protected $numNodes;
    /**
     * @var int
     */
    protected $numChannels;
    /**
     * @var string
     */
    protected $totalNetworkCapacity;
    /**
     * @var float
     */
    protected $avgChannelSize;
    /**
     * @var string
     */
    protected $minChannelSize;
    /**
     * @var string
     */
    protected $maxChannelSize;


    public function getGraphDiameter(): int
    {
        return $this->graphDiameter;
    }

    public function getAvgOutDegree(): float
    {
        return $this->avgOutDegree;
    }

    public function getMaxOutDegree(): int
    {
        return $this->maxOutDegree;
    }

    public function getNumNodes(): int
    {
        return $this->numNodes;
    }

    public function getNumChannels(): int
    {
        return $this->numChannels;
    }

    public function getTotalNetworkCapacity(): string
    {
        return $this->totalNetworkCapacity;
    }

    public function getAvgChannelSize(): float
    {
        return $this->avgChannelSize;
    }

    public function getMinChannelSize(): string
    {
        return $this->minChannelSize;
    }

    public function getMaxChannelSize(): string
    {
        return $this->maxChannelSize;
    }

    public function __construct(int $graphDiameter, float $avgOutDegree, int $maxOutDegree, int $numNodes, int $numChannels, string $totalNetworkCapacity, float $avgChannelSize, string $minChannelSize, string $maxChannelSize)
    {
        $this->graphDiameter = $graphDiameter;
        $this->avgOutDegree = $avgOutDegree;
        $this->maxOutDegree = $maxOutDegree;
        $this->numNodes = $numNodes;
        $this->numChannels = $numChannels;
        $this->totalNetworkCapacity = $totalNetworkCapacity;
        $this->avgChannelSize = $avgChannelSize;
        $this->minChannelSize = $minChannelSize;
        $this->maxChannelSize = $maxChannelSize;
    }


    public static function fromResponse(array $body): self
    {
        return new self(
            $body['graph_diameter'],
            $body['avg_out_degree'],
            $body['max_out_degree'],
            $body['num_nodes'],
            $body['num_channels'],
            $body['total_network_capacity'],
            $body['avg_channel_size'],
            $body['min_channel_size'],
            $body['max_channel_size']
        );
    }
}
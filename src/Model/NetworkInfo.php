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
    /**
     * @return int
     */
    public function getGraphDiameter()
    {
        return $this->graphDiameter;
    }
    /**
     * @param int $graphDiameter
     *
     * @return self
     */
    public function setGraphDiameter($graphDiameter = null)
    {
        $this->graphDiameter = $graphDiameter;
        return $this;
    }
    /**
     * @return float
     */
    public function getAvgOutDegree()
    {
        return $this->avgOutDegree;
    }
    /**
     * @param float $avgOutDegree
     *
     * @return self
     */
    public function setAvgOutDegree($avgOutDegree = null)
    {
        $this->avgOutDegree = $avgOutDegree;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxOutDegree()
    {
        return $this->maxOutDegree;
    }
    /**
     * @param int $maxOutDegree
     *
     * @return self
     */
    public function setMaxOutDegree($maxOutDegree = null)
    {
        $this->maxOutDegree = $maxOutDegree;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumNodes()
    {
        return $this->numNodes;
    }
    /**
     * @param int $numNodes
     *
     * @return self
     */
    public function setNumNodes($numNodes = null)
    {
        $this->numNodes = $numNodes;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumChannels()
    {
        return $this->numChannels;
    }
    /**
     * @param int $numChannels
     *
     * @return self
     */
    public function setNumChannels($numChannels = null)
    {
        $this->numChannels = $numChannels;
        return $this;
    }
    /**
     * @return string
     */
    public function getTotalNetworkCapacity()
    {
        return $this->totalNetworkCapacity;
    }
    /**
     * @param string $totalNetworkCapacity
     *
     * @return self
     */
    public function setTotalNetworkCapacity($totalNetworkCapacity = null)
    {
        $this->totalNetworkCapacity = $totalNetworkCapacity;
        return $this;
    }
    /**
     * @return float
     */
    public function getAvgChannelSize()
    {
        return $this->avgChannelSize;
    }
    /**
     * @param float $avgChannelSize
     *
     * @return self
     */
    public function setAvgChannelSize($avgChannelSize = null)
    {
        $this->avgChannelSize = $avgChannelSize;
        return $this;
    }
    /**
     * @return string
     */
    public function getMinChannelSize()
    {
        return $this->minChannelSize;
    }
    /**
     * @param string $minChannelSize
     *
     * @return self
     */
    public function setMinChannelSize($minChannelSize = null)
    {
        $this->minChannelSize = $minChannelSize;
        return $this;
    }
    /**
     * @return string
     */
    public function getMaxChannelSize()
    {
        return $this->maxChannelSize;
    }
    /**
     * @param string $maxChannelSize
     *
     * @return self
     */
    public function setMaxChannelSize($maxChannelSize = null)
    {
        $this->maxChannelSize = $maxChannelSize;
        return $this;
    }
}
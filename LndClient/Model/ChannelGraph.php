<?php

namespace LightningSale\LndClient\Model;

class ChannelGraph
{
    /**
     * @var LightningNode[]
     */
    protected $nodes;
    /**
     * @var ChannelEdge[]
     */
    protected $edges;

    /**
     * @return LightningNode[]
     */
    public function getNodes(): array
    {
        return $this->nodes;
    }

    /**
     * @return ChannelEdge[]
     */
    public function getEdges(): array
    {
        return $this->edges;
    }

    /**
     * ChannelGraph constructor.
     * @param LightningNode[] $nodes
     * @param ChannelEdge[] $edges
     */
    public function __construct(array $nodes, array $edges)
    {
        $this->nodes = $nodes;
        $this->edges = $edges;
    }


    public static function fromResponse($body)
    {
        return new self(
            array_map(function($i) {return LightningNode::fromResponse($i);}, $body['nodes']),
            array_map(function($i) {return ChannelEdge::fromResponse($i);}, $body['edges'])
        );
    }
}
<?php

namespace LightningSale\LndRest\Model;

class ConfirmationUpdate
{
    /**
     * @var string
     */
    protected $blockSha;
    /**
     * @var int
     */
    protected $blockHeight;
    /**
     * @var int
     */
    protected $numConfsLeft;

    public function getBlockSha(): string
    {
        return $this->blockSha;
    }

    public function getBlockHeight(): int
    {
        return $this->blockHeight;
    }

    public function getNumConfsLeft(): int
    {
        return $this->numConfsLeft;
    }

    public function __construct(string $blockSha, int $blockHeight, int $numConfsLeft)
    {
        $this->blockSha = $blockSha;
        $this->blockHeight = $blockHeight;
        $this->numConfsLeft = $numConfsLeft;
    }


    public static function fromResponse(array $data): self
    {
        return new self(
            $data['block_sha'],
            $data['block_height'],
            $data['num_confs_left']
        );
    }
}
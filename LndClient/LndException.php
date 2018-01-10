<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 10.01.18
 * Time: 08:38
 */

namespace LightningSale\LndClient;


use GuzzleHttp\Exception\ServerException;

class LndException extends \Exception
{
    public function __construct(string $message, int $code, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public static function fromGuzzle(BadResponseException $exception): LndException {
        $response = $exception->getResponse();
        if (!$response)
            return new self(  $exception->getMessage(), (int) $exception->getCode(), $exception);


        if ($response->getStatusCode() === 404)
            throw new LndException("Wallet is not opened, unlock or create it with lncli", 3);

        $body = $response->getBody()->getContents();
        try {
            $body = \GuzzleHttp\json_decode($body, true);
            return new self($body['error'], (int) $body['code']);
        } catch (\InvalidArgumentException $exception) {
            return new self($exception->getMessage(), (int) $exception->getCode(), $exception);
        }
    }
}
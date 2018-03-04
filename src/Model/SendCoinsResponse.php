<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 04.03.18
 * Time: 15:25
 */

namespace LightningSale\LndClient\Model;


use LightningSale\LndClient\LndException;

class SendCoinsResponse
{
    /**
     * @var Route
     */
    private $paymentRoute;
    /**
     * @var string
     */
    private $txid;

    public function getPaymentRoute(): Route
    {
        return $this->paymentRoute;
    }

    public function getTxid(): string
    {
        return $this->txid;
    }

    /**
     * SendCoinsResponse constructor.
     */
    public function __construct(string $txid, Route $paymentRoute)
    {
        $this->txid = $txid;
        $this->paymentRoute = $paymentRoute;
    }

    public static function fromResponse(array $body): self {

        $error = $body['payment_error']?? '';

        if ($error)
            throw new LndException('Could not send coins!', LndException::SEND_COINS_EXCEPTION);

        return new self(
            $body['txid'],
            Route::fromResponse($body['payment_route'])
        );
    }
}
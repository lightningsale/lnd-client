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
     * @var string
     */
    protected $paymentPreimage;
    /**
     * @var string
     */
    protected $paymentRoute;
    /**
     * @var string
     */
    protected $paymentHash;
    /**
     * @return string
     */
    public function getPaymentPreimage(): string
    {
        return bin2hex(base64_decode($this->paymentPreimage));
    }

    /**
     * @var string
     */
    public function getPaymentRoute(): Route
    {
        return $this->paymentRoute;
    }

    /**
     * @return string
     */
    public function getPaymentHash()
    {
        return bin2hex(base64_decode($this->paymentHash));
    }

    /**
     * SendCoinsResponse constructor.
     */
    public function __construct(string $paymentPreimage, Route $paymentRoute, string $paymentHash)
    {
        $this->paymentPreimage = $paymentPreimage;
        $this->paymentRoute = $paymentRoute;
        $this->paymentHash = $paymentHash;
    }

    public static function fromResponse(array $body): SendCoinsResponse
    {
        $error = $body['payment_error'] ?? '';

        if ($error)
            throw new LndException($body['payment_error'], LndException::SEND_COINS_EXCEPTION);

        return new self(
            $body['payment_preimage'],
            Route::fromResponse($body['payment_route']),
            $body['payment_hash'] ?? ''
        );
    }
}
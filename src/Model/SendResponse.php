<?php

namespace LightningSale\LndRest\Model;

class SendResponse
{
    /**
     * @var string
     */
    protected $paymentError;
    /**
     * @var string
     */
    protected $paymentPreimage;
    /**
     * @var Route
     */
    protected $paymentRoute;

    public function getPaymentError(): string
    {
        return $this->paymentError;
    }

    public function getPaymentPreimage(): string
    {
        return $this->paymentPreimage;
    }

    public function getPaymentRoute(): ?Route
    {
        return $this->paymentRoute;
    }

    public function __construct(string $paymentError, string $paymentPreimage, Route $paymentRoute = null)
    {
        $this->paymentError = $paymentError;
        $this->paymentPreimage = $paymentPreimage;
        $this->paymentRoute = $paymentRoute;
    }

    public static function fromResponse(array $data): self
    {
        $paymentRoute = $data['payment_route'] ?? null;
        return new self(
            $data['payment_error'] ?? "",
            $data['payment_preimage'] ?? "",
             $paymentRoute ? Route::fromResponse($paymentRoute) : null
        );
    }
}
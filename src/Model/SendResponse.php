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
    /**
     * @return string
     */
    public function getPaymentError()
    {
        return $this->paymentError;
    }
    /**
     * @param string $paymentError
     *
     * @return self
     */
    public function setPaymentError($paymentError = null)
    {
        $this->paymentError = $paymentError;
        return $this;
    }
    /**
     * @return string
     */
    public function getPaymentPreimage()
    {
        return $this->paymentPreimage;
    }
    /**
     * @param string $paymentPreimage
     *
     * @return self
     */
    public function setPaymentPreimage($paymentPreimage = null)
    {
        $this->paymentPreimage = $paymentPreimage;
        return $this;
    }
    /**
     * @return Route
     */
    public function getPaymentRoute()
    {
        return $this->paymentRoute;
    }
    /**
     * @param Route $paymentRoute
     *
     * @return self
     */
    public function setPaymentRoute(Route $paymentRoute = null)
    {
        $this->paymentRoute = $paymentRoute;
        return $this;
    }
}
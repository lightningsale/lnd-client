<?php

namespace LightningSale\LndRest\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use LightningSale\LndRest\Model\Route;

class SendResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\SendResponse') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\SendResponse) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \LightningSale\LndRest\Model\SendResponse();
        if (property_exists($data, 'payment_error')) {
            $object->setPaymentError($data->{'payment_error'});
        }
        if (property_exists($data, 'payment_preimage')) {
            $object->setPaymentPreimage($data->{'payment_preimage'});
        }
        if (property_exists($data, 'payment_route')) {
            $object->setPaymentRoute($this->denormalizer->denormalize($data->{'payment_route'}, Route::class, 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getPaymentError()) {
            $data->{'payment_error'} = $object->getPaymentError();
        }
        if (null !== $object->getPaymentPreimage()) {
            $data->{'payment_preimage'} = $object->getPaymentPreimage();
        }
        if (null !== $object->getPaymentRoute()) {
            $data->{'payment_route'} = $this->normalizer->normalize($object->getPaymentRoute(), 'json', $context);
        }
        return $data;
    }
}
<?php

namespace LightningSale\LndRest\Normalizer;

use LightningSale\LndRest\Jane\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SendRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\SendRequest') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\SendRequest) {
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
        $object = new \LightningSale\LndRest\Model\SendRequest();
        if (property_exists($data, 'dest')) {
            $object->setDest($data->{'dest'});
        }
        if (property_exists($data, 'dest_string')) {
            $object->setDestString($data->{'dest_string'});
        }
        if (property_exists($data, 'amt')) {
            $object->setAmt($data->{'amt'});
        }
        if (property_exists($data, 'payment_hash')) {
            $object->setPaymentHash($data->{'payment_hash'});
        }
        if (property_exists($data, 'payment_hash_string')) {
            $object->setPaymentHashString($data->{'payment_hash_string'});
        }
        if (property_exists($data, 'payment_request')) {
            $object->setPaymentRequest($data->{'payment_request'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getDest()) {
            $data->{'dest'} = $object->getDest();
        }
        if (null !== $object->getDestString()) {
            $data->{'dest_string'} = $object->getDestString();
        }
        if (null !== $object->getAmt()) {
            $data->{'amt'} = $object->getAmt();
        }
        if (null !== $object->getPaymentHash()) {
            $data->{'payment_hash'} = $object->getPaymentHash();
        }
        if (null !== $object->getPaymentHashString()) {
            $data->{'payment_hash_string'} = $object->getPaymentHashString();
        }
        if (null !== $object->getPaymentRequest()) {
            $data->{'payment_request'} = $object->getPaymentRequest();
        }
        return $data;
    }
}
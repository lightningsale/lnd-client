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
class PayReqNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\PayReq') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\PayReq) {
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
        $object = new \LightningSale\LndRest\Model\PayReq();
        if (property_exists($data, 'destination')) {
            $object->setDestination($data->{'destination'});
        }
        if (property_exists($data, 'payment_hash')) {
            $object->setPaymentHash($data->{'payment_hash'});
        }
        if (property_exists($data, 'num_satoshis')) {
            $object->setNumSatoshis($data->{'num_satoshis'});
        }
        if (property_exists($data, 'timestamp')) {
            $object->setTimestamp($data->{'timestamp'});
        }
        if (property_exists($data, 'expiry')) {
            $object->setExpiry($data->{'expiry'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'description_hash')) {
            $object->setDescriptionHash($data->{'description_hash'});
        }
        if (property_exists($data, 'fallback_addr')) {
            $object->setFallbackAddr($data->{'fallback_addr'});
        }
        if (property_exists($data, 'cltv_expiry')) {
            $object->setCltvExpiry($data->{'cltv_expiry'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getDestination()) {
            $data->{'destination'} = $object->getDestination();
        }
        if (null !== $object->getPaymentHash()) {
            $data->{'payment_hash'} = $object->getPaymentHash();
        }
        if (null !== $object->getNumSatoshis()) {
            $data->{'num_satoshis'} = $object->getNumSatoshis();
        }
        if (null !== $object->getTimestamp()) {
            $data->{'timestamp'} = $object->getTimestamp();
        }
        if (null !== $object->getExpiry()) {
            $data->{'expiry'} = $object->getExpiry();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getDescriptionHash()) {
            $data->{'description_hash'} = $object->getDescriptionHash();
        }
        if (null !== $object->getFallbackAddr()) {
            $data->{'fallback_addr'} = $object->getFallbackAddr();
        }
        if (null !== $object->getCltvExpiry()) {
            $data->{'cltv_expiry'} = $object->getCltvExpiry();
        }
        return $data;
    }
}
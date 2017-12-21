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
class RoutingPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\RoutingPolicy') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\RoutingPolicy) {
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
        $object = new \LightningSale\LndRest\Model\RoutingPolicy();
        if (property_exists($data, 'time_lock_delta')) {
            $object->setTimeLockDelta($data->{'time_lock_delta'});
        }
        if (property_exists($data, 'min_htlc')) {
            $object->setMinHtlc($data->{'min_htlc'});
        }
        if (property_exists($data, 'fee_base_msat')) {
            $object->setFeeBaseMsat($data->{'fee_base_msat'});
        }
        if (property_exists($data, 'fee_rate_milli_msat')) {
            $object->setFeeRateMilliMsat($data->{'fee_rate_milli_msat'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTimeLockDelta()) {
            $data->{'time_lock_delta'} = $object->getTimeLockDelta();
        }
        if (null !== $object->getMinHtlc()) {
            $data->{'min_htlc'} = $object->getMinHtlc();
        }
        if (null !== $object->getFeeBaseMsat()) {
            $data->{'fee_base_msat'} = $object->getFeeBaseMsat();
        }
        if (null !== $object->getFeeRateMilliMsat()) {
            $data->{'fee_rate_milli_msat'} = $object->getFeeRateMilliMsat();
        }
        return $data;
    }
}
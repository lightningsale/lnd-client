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
class HopNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\Hop') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\Hop) {
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
        $object = new \LightningSale\LndRest\Model\Hop();
        if (property_exists($data, 'chan_id')) {
            $object->setChanId($data->{'chan_id'});
        }
        if (property_exists($data, 'chan_capacity')) {
            $object->setChanCapacity($data->{'chan_capacity'});
        }
        if (property_exists($data, 'amt_to_forward')) {
            $object->setAmtToForward($data->{'amt_to_forward'});
        }
        if (property_exists($data, 'fee')) {
            $object->setFee($data->{'fee'});
        }
        if (property_exists($data, 'expiry')) {
            $object->setExpiry($data->{'expiry'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChanId()) {
            $data->{'chan_id'} = $object->getChanId();
        }
        if (null !== $object->getChanCapacity()) {
            $data->{'chan_capacity'} = $object->getChanCapacity();
        }
        if (null !== $object->getAmtToForward()) {
            $data->{'amt_to_forward'} = $object->getAmtToForward();
        }
        if (null !== $object->getFee()) {
            $data->{'fee'} = $object->getFee();
        }
        if (null !== $object->getExpiry()) {
            $data->{'expiry'} = $object->getExpiry();
        }
        return $data;
    }
}
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
use LightningSale\LndRest\Model\Hop;

class RouteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\Route') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\Route) {
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
        $object = new \LightningSale\LndRest\Model\Route();
        if (property_exists($data, 'total_time_lock')) {
            $object->setTotalTimeLock($data->{'total_time_lock'});
        }
        if (property_exists($data, 'total_fees')) {
            $object->setTotalFees($data->{'total_fees'});
        }
        if (property_exists($data, 'total_amt')) {
            $object->setTotalAmt($data->{'total_amt'});
        }
        if (property_exists($data, 'hops')) {
            $values = array();
            foreach ($data->{'hops'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, Hop::class, 'json', $context);
            }
            $object->setHops($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTotalTimeLock()) {
            $data->{'total_time_lock'} = $object->getTotalTimeLock();
        }
        if (null !== $object->getTotalFees()) {
            $data->{'total_fees'} = $object->getTotalFees();
        }
        if (null !== $object->getTotalAmt()) {
            $data->{'total_amt'} = $object->getTotalAmt();
        }
        if (null !== $object->getHops()) {
            $values = array();
            foreach ($object->getHops() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'hops'} = $values;
        }
        return $data;
    }
}
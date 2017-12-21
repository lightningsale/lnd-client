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
use LightningSale\LndRest\Model\ChannelPoint;

class ClosedChannelUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\ClosedChannelUpdate') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\ClosedChannelUpdate) {
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
        $object = new \LightningSale\LndRest\Model\ClosedChannelUpdate();
        if (property_exists($data, 'chan_id')) {
            $object->setChanId($data->{'chan_id'});
        }
        if (property_exists($data, 'capacity')) {
            $object->setCapacity($data->{'capacity'});
        }
        if (property_exists($data, 'closed_height')) {
            $object->setClosedHeight($data->{'closed_height'});
        }
        if (property_exists($data, 'chan_point')) {
            $object->setChanPoint($this->denormalizer->denormalize($data->{'chan_point'}, ChannelPoint::class, 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChanId()) {
            $data->{'chan_id'} = $object->getChanId();
        }
        if (null !== $object->getCapacity()) {
            $data->{'capacity'} = $object->getCapacity();
        }
        if (null !== $object->getClosedHeight()) {
            $data->{'closed_height'} = $object->getClosedHeight();
        }
        if (null !== $object->getChanPoint()) {
            $data->{'chan_point'} = $this->normalizer->normalize($object->getChanPoint(), 'json', $context);
        }
        return $data;
    }
}
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
use LightningSale\LndRest\Model\RoutingPolicy;

class ChannelEdgeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\ChannelEdge') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\ChannelEdge) {
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
        $object = new \LightningSale\LndRest\Model\ChannelEdge();
        if (property_exists($data, 'channel_id')) {
            $object->setChannelId($data->{'channel_id'});
        }
        if (property_exists($data, 'chan_point')) {
            $object->setChanPoint($data->{'chan_point'});
        }
        if (property_exists($data, 'last_update')) {
            $object->setLastUpdate($data->{'last_update'});
        }
        if (property_exists($data, 'node1_pub')) {
            $object->setNode1Pub($data->{'node1_pub'});
        }
        if (property_exists($data, 'node2_pub')) {
            $object->setNode2Pub($data->{'node2_pub'});
        }
        if (property_exists($data, 'capacity')) {
            $object->setCapacity($data->{'capacity'});
        }
        if (property_exists($data, 'node1_policy')) {
            $object->setNode1Policy($this->denormalizer->denormalize($data->{'node1_policy'}, RoutingPolicy::class, 'json', $context));
        }
        if (property_exists($data, 'node2_policy')) {
            $object->setNode2Policy($this->denormalizer->denormalize($data->{'node2_policy'}, RoutingPolicy::class, 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChannelId()) {
            $data->{'channel_id'} = $object->getChannelId();
        }
        if (null !== $object->getChanPoint()) {
            $data->{'chan_point'} = $object->getChanPoint();
        }
        if (null !== $object->getLastUpdate()) {
            $data->{'last_update'} = $object->getLastUpdate();
        }
        if (null !== $object->getNode1Pub()) {
            $data->{'node1_pub'} = $object->getNode1Pub();
        }
        if (null !== $object->getNode2Pub()) {
            $data->{'node2_pub'} = $object->getNode2Pub();
        }
        if (null !== $object->getCapacity()) {
            $data->{'capacity'} = $object->getCapacity();
        }
        if (null !== $object->getNode1Policy()) {
            $data->{'node1_policy'} = $this->normalizer->normalize($object->getNode1Policy(), 'json', $context);
        }
        if (null !== $object->getNode2Policy()) {
            $data->{'node2_policy'} = $this->normalizer->normalize($object->getNode2Policy(), 'json', $context);
        }
        return $data;
    }
}
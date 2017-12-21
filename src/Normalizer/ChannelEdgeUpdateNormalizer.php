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
use LightningSale\LndRest\Model\ChannelPoint;

class ChannelEdgeUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\ChannelEdgeUpdate') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\ChannelEdgeUpdate) {
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
        $object = new \LightningSale\LndRest\Model\ChannelEdgeUpdate();
        if (property_exists($data, 'chan_id')) {
            $object->setChanId($data->{'chan_id'});
        }
        if (property_exists($data, 'chan_point')) {
            $object->setChanPoint($this->denormalizer->denormalize($data->{'chan_point'}, ChannelPoint::class, 'json', $context));
        }
        if (property_exists($data, 'capacity')) {
            $object->setCapacity($data->{'capacity'});
        }
        if (property_exists($data, 'routing_policy')) {
            $object->setRoutingPolicy($this->denormalizer->denormalize($data->{'routing_policy'}, RoutingPolicy::class, 'json', $context));
        }
        if (property_exists($data, 'advertising_node')) {
            $object->setAdvertisingNode($data->{'advertising_node'});
        }
        if (property_exists($data, 'connecting_node')) {
            $object->setConnectingNode($data->{'connecting_node'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChanId()) {
            $data->{'chan_id'} = $object->getChanId();
        }
        if (null !== $object->getChanPoint()) {
            $data->{'chan_point'} = $this->normalizer->normalize($object->getChanPoint(), 'json', $context);
        }
        if (null !== $object->getCapacity()) {
            $data->{'capacity'} = $object->getCapacity();
        }
        if (null !== $object->getRoutingPolicy()) {
            $data->{'routing_policy'} = $this->normalizer->normalize($object->getRoutingPolicy(), 'json', $context);
        }
        if (null !== $object->getAdvertisingNode()) {
            $data->{'advertising_node'} = $object->getAdvertisingNode();
        }
        if (null !== $object->getConnectingNode()) {
            $data->{'connecting_node'} = $object->getConnectingNode();
        }
        return $data;
    }
}
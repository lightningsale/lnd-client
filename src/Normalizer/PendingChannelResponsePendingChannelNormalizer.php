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
class PendingChannelResponsePendingChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\PendingChannelResponsePendingChannel') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\PendingChannelResponsePendingChannel) {
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
        $object = new \LightningSale\LndRest\Model\PendingChannelResponsePendingChannel();
        if (property_exists($data, 'remote_node_pub')) {
            $object->setRemoteNodePub($data->{'remote_node_pub'});
        }
        if (property_exists($data, 'channel_point')) {
            $object->setChannelPoint($data->{'channel_point'});
        }
        if (property_exists($data, 'capacity')) {
            $object->setCapacity($data->{'capacity'});
        }
        if (property_exists($data, 'local_balance')) {
            $object->setLocalBalance($data->{'local_balance'});
        }
        if (property_exists($data, 'remote_balance')) {
            $object->setRemoteBalance($data->{'remote_balance'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getRemoteNodePub()) {
            $data->{'remote_node_pub'} = $object->getRemoteNodePub();
        }
        if (null !== $object->getChannelPoint()) {
            $data->{'channel_point'} = $object->getChannelPoint();
        }
        if (null !== $object->getCapacity()) {
            $data->{'capacity'} = $object->getCapacity();
        }
        if (null !== $object->getLocalBalance()) {
            $data->{'local_balance'} = $object->getLocalBalance();
        }
        if (null !== $object->getRemoteBalance()) {
            $data->{'remote_balance'} = $object->getRemoteBalance();
        }
        return $data;
    }
}
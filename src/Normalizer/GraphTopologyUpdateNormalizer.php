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
use LightningSale\LndRest\Model\ClosedChannelUpdate;
use LightningSale\LndRest\Model\ChannelEdgeUpdate;
use LightningSale\LndRest\Model\NodeUpdate;

class GraphTopologyUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\GraphTopologyUpdate') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\GraphTopologyUpdate) {
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
        $object = new \LightningSale\LndRest\Model\GraphTopologyUpdate();
        if (property_exists($data, 'node_updates')) {
            $values = array();
            foreach ($data->{'node_updates'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, NodeUpdate::class, 'json', $context);
            }
            $object->setNodeUpdates($values);
        }
        if (property_exists($data, 'channel_updates')) {
            $values_1 = array();
            foreach ($data->{'channel_updates'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, ChannelEdgeUpdate::class, 'json', $context);
            }
            $object->setChannelUpdates($values_1);
        }
        if (property_exists($data, 'closed_chans')) {
            $values_2 = array();
            foreach ($data->{'closed_chans'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, ClosedChannelUpdate::class, 'json', $context);
            }
            $object->setClosedChans($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getNodeUpdates()) {
            $values = array();
            foreach ($object->getNodeUpdates() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'node_updates'} = $values;
        }
        if (null !== $object->getChannelUpdates()) {
            $values_1 = array();
            foreach ($object->getChannelUpdates() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'channel_updates'} = $values_1;
        }
        if (null !== $object->getClosedChans()) {
            $values_2 = array();
            foreach ($object->getClosedChans() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'closed_chans'} = $values_2;
        }
        return $data;
    }
}
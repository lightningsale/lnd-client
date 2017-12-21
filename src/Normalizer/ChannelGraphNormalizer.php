<?php

namespace LightningSale\LndRest\Normalizer;

use LightningSale\LndRest\Jane\Reference;
use LightningSale\LndRest\Model\ChannelGraph;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use LightningSale\LndRest\Model\ChannelEdge;
use LightningSale\LndRest\Model\LightningNode;

class ChannelGraphNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\ChannelGraph') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof ChannelGraph) {
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
        $object = new ChannelGraph();
        if (property_exists($data, 'nodes')) {
            $values = array();
            foreach ($data->{'nodes'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, LightningNode::class, 'json', $context);
            }
            $object->setNodes($values);
        }
        if (property_exists($data, 'edges')) {
            $values_1 = array();
            foreach ($data->{'edges'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, ChannelEdge::class, 'json', $context);
            }
            $object->setEdges($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getNodes()) {
            $values = array();
            foreach ($object->getNodes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'nodes'} = $values;
        }
        if (null !== $object->getEdges()) {
            $values_1 = array();
            foreach ($object->getEdges() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'edges'} = $values_1;
        }
        return $data;
    }
}
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
use LightningSale\LndRest\Model\LightningNode;

class NodeInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\NodeInfo') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\NodeInfo) {
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
        $object = new \LightningSale\LndRest\Model\NodeInfo();
        if (property_exists($data, 'node')) {
            $object->setNode($this->denormalizer->denormalize($data->{'node'}, LightningNode::class, 'json', $context));
        }
        if (property_exists($data, 'num_channels')) {
            $object->setNumChannels($data->{'num_channels'});
        }
        if (property_exists($data, 'total_capacity')) {
            $object->setTotalCapacity($data->{'total_capacity'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getNode()) {
            $data->{'node'} = $this->normalizer->normalize($object->getNode(), 'json', $context);
        }
        if (null !== $object->getNumChannels()) {
            $data->{'num_channels'} = $object->getNumChannels();
        }
        if (null !== $object->getTotalCapacity()) {
            $data->{'total_capacity'} = $object->getTotalCapacity();
        }
        return $data;
    }
}
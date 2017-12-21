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
use LightningSale\LndRest\Model\NodeAddress;

class LightningNodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\LightningNode') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\LightningNode) {
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
        $object = new \LightningSale\LndRest\Model\LightningNode();
        if (property_exists($data, 'last_update')) {
            $object->setLastUpdate($data->{'last_update'});
        }
        if (property_exists($data, 'pub_key')) {
            $object->setPubKey($data->{'pub_key'});
        }
        if (property_exists($data, 'alias')) {
            $object->setAlias($data->{'alias'});
        }
        if (property_exists($data, 'addresses')) {
            $values = array();
            foreach ($data->{'addresses'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, NodeAddress::class, 'json', $context);
            }
            $object->setAddresses($values);
        }
        if (property_exists($data, 'color')) {
            $object->setColor($data->{'color'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLastUpdate()) {
            $data->{'last_update'} = $object->getLastUpdate();
        }
        if (null !== $object->getPubKey()) {
            $data->{'pub_key'} = $object->getPubKey();
        }
        if (null !== $object->getAlias()) {
            $data->{'alias'} = $object->getAlias();
        }
        if (null !== $object->getAddresses()) {
            $values = array();
            foreach ($object->getAddresses() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'addresses'} = $values;
        }
        if (null !== $object->getColor()) {
            $data->{'color'} = $object->getColor();
        }
        return $data;
    }
}
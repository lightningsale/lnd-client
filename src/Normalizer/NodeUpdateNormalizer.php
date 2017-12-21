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
class NodeUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\NodeUpdate') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\NodeUpdate) {
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
        $object = new \LightningSale\LndRest\Model\NodeUpdate();
        if (property_exists($data, 'addresses')) {
            $values = array();
            foreach ($data->{'addresses'} as $value) {
                $values[] = $value;
            }
            $object->setAddresses($values);
        }
        if (property_exists($data, 'identity_key')) {
            $object->setIdentityKey($data->{'identity_key'});
        }
        if (property_exists($data, 'global_features')) {
            $object->setGlobalFeatures($data->{'global_features'});
        }
        if (property_exists($data, 'alias')) {
            $object->setAlias($data->{'alias'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAddresses()) {
            $values = array();
            foreach ($object->getAddresses() as $value) {
                $values[] = $value;
            }
            $data->{'addresses'} = $values;
        }
        if (null !== $object->getIdentityKey()) {
            $data->{'identity_key'} = $object->getIdentityKey();
        }
        if (null !== $object->getGlobalFeatures()) {
            $data->{'global_features'} = $object->getGlobalFeatures();
        }
        if (null !== $object->getAlias()) {
            $data->{'alias'} = $object->getAlias();
        }
        return $data;
    }
}
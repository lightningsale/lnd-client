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
class SendCoinsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\SendCoinsRequest') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\SendCoinsRequest) {
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
        $object = new \LightningSale\LndRest\Model\SendCoinsRequest();
        if (property_exists($data, 'addr')) {
            $object->setAddr($data->{'addr'});
        }
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'target_conf')) {
            $object->setTargetConf($data->{'target_conf'});
        }
        if (property_exists($data, 'sat_per_byte')) {
            $object->setSatPerByte($data->{'sat_per_byte'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAddr()) {
            $data->{'addr'} = $object->getAddr();
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getTargetConf()) {
            $data->{'target_conf'} = $object->getTargetConf();
        }
        if (null !== $object->getSatPerByte()) {
            $data->{'sat_per_byte'} = $object->getSatPerByte();
        }
        return $data;
    }
}
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

class FeeUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\FeeUpdateRequest') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\FeeUpdateRequest) {
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
        $object = new \LightningSale\LndRest\Model\FeeUpdateRequest();
        if (property_exists($data, 'global')) {
            $object->setGlobal($data->{'global'});
        }
        if (property_exists($data, 'chan_point')) {
            $object->setChanPoint($this->denormalizer->denormalize($data->{'chan_point'}, ChannelPoint::class, 'json', $context));
        }
        if (property_exists($data, 'base_fee_msat')) {
            $object->setBaseFeeMsat($data->{'base_fee_msat'});
        }
        if (property_exists($data, 'fee_rate')) {
            $object->setFeeRate($data->{'fee_rate'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getGlobal()) {
            $data->{'global'} = $object->getGlobal();
        }
        if (null !== $object->getChanPoint()) {
            $data->{'chan_point'} = $this->normalizer->normalize($object->getChanPoint(), 'json', $context);
        }
        if (null !== $object->getBaseFeeMsat()) {
            $data->{'base_fee_msat'} = $object->getBaseFeeMsat();
        }
        if (null !== $object->getFeeRate()) {
            $data->{'fee_rate'} = $object->getFeeRate();
        }
        return $data;
    }
}
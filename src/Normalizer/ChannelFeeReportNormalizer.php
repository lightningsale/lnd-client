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
class ChannelFeeReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\ChannelFeeReport') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\ChannelFeeReport) {
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
        $object = new \LightningSale\LndRest\Model\ChannelFeeReport();
        if (property_exists($data, 'chan_point')) {
            $object->setChanPoint($data->{'chan_point'});
        }
        if (property_exists($data, 'base_fee_msat')) {
            $object->setBaseFeeMsat($data->{'base_fee_msat'});
        }
        if (property_exists($data, 'fee_per_mil')) {
            $object->setFeePerMil($data->{'fee_per_mil'});
        }
        if (property_exists($data, 'fee_rate')) {
            $object->setFeeRate($data->{'fee_rate'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChanPoint()) {
            $data->{'chan_point'} = $object->getChanPoint();
        }
        if (null !== $object->getBaseFeeMsat()) {
            $data->{'base_fee_msat'} = $object->getBaseFeeMsat();
        }
        if (null !== $object->getFeePerMil()) {
            $data->{'fee_per_mil'} = $object->getFeePerMil();
        }
        if (null !== $object->getFeeRate()) {
            $data->{'fee_rate'} = $object->getFeeRate();
        }
        return $data;
    }
}
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
class ChannelPointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\ChannelPoint') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\ChannelPoint) {
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
        $object = new \LightningSale\LndRest\Model\ChannelPoint();
        if (property_exists($data, 'funding_txid')) {
            $object->setFundingTxid($data->{'funding_txid'});
        }
        if (property_exists($data, 'funding_txid_str')) {
            $object->setFundingTxidStr($data->{'funding_txid_str'});
        }
        if (property_exists($data, 'output_index')) {
            $object->setOutputIndex($data->{'output_index'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFundingTxid()) {
            $data->{'funding_txid'} = $object->getFundingTxid();
        }
        if (null !== $object->getFundingTxidStr()) {
            $data->{'funding_txid_str'} = $object->getFundingTxidStr();
        }
        if (null !== $object->getOutputIndex()) {
            $data->{'output_index'} = $object->getOutputIndex();
        }
        return $data;
    }
}
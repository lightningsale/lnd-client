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
class PendingHTLCNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\PendingHTLC') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\PendingHTLC) {
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
        $object = new \LightningSale\LndRest\Model\PendingHTLC();
        if (property_exists($data, 'incoming')) {
            $object->setIncoming($data->{'incoming'});
        }
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'outpoint')) {
            $object->setOutpoint($data->{'outpoint'});
        }
        if (property_exists($data, 'maturity_height')) {
            $object->setMaturityHeight($data->{'maturity_height'});
        }
        if (property_exists($data, 'blocks_til_maturity')) {
            $object->setBlocksTilMaturity($data->{'blocks_til_maturity'});
        }
        if (property_exists($data, 'stage')) {
            $object->setStage($data->{'stage'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getIncoming()) {
            $data->{'incoming'} = $object->getIncoming();
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getOutpoint()) {
            $data->{'outpoint'} = $object->getOutpoint();
        }
        if (null !== $object->getMaturityHeight()) {
            $data->{'maturity_height'} = $object->getMaturityHeight();
        }
        if (null !== $object->getBlocksTilMaturity()) {
            $data->{'blocks_til_maturity'} = $object->getBlocksTilMaturity();
        }
        if (null !== $object->getStage()) {
            $data->{'stage'} = $object->getStage();
        }
        return $data;
    }
}
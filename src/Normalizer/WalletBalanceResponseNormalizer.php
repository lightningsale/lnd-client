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
class WalletBalanceResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\WalletBalanceResponse') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\WalletBalanceResponse) {
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
        $object = new \LightningSale\LndRest\Model\WalletBalanceResponse();
        if (property_exists($data, 'total_balance')) {
            $object->setTotalBalance($data->{'total_balance'});
        }
        if (property_exists($data, 'confirmed_balance')) {
            $object->setConfirmedBalance($data->{'confirmed_balance'});
        }
        if (property_exists($data, 'unconfirmed_balance')) {
            $object->setUnconfirmedBalance($data->{'unconfirmed_balance'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTotalBalance()) {
            $data->{'total_balance'} = $object->getTotalBalance();
        }
        if (null !== $object->getConfirmedBalance()) {
            $data->{'confirmed_balance'} = $object->getConfirmedBalance();
        }
        if (null !== $object->getUnconfirmedBalance()) {
            $data->{'unconfirmed_balance'} = $object->getUnconfirmedBalance();
        }
        return $data;
    }
}
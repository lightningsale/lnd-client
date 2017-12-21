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
class PaymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\Payment') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\Payment) {
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
        $object = new \LightningSale\LndRest\Model\Payment();
        if (property_exists($data, 'payment_hash')) {
            $object->setPaymentHash($data->{'payment_hash'});
        }
        if (property_exists($data, 'value')) {
            $object->setValue($data->{'value'});
        }
        if (property_exists($data, 'creation_date')) {
            $object->setCreationDate($data->{'creation_date'});
        }
        if (property_exists($data, 'path')) {
            $values = array();
            foreach ($data->{'path'} as $value) {
                $values[] = $value;
            }
            $object->setPath($values);
        }
        if (property_exists($data, 'fee')) {
            $object->setFee($data->{'fee'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getPaymentHash()) {
            $data->{'payment_hash'} = $object->getPaymentHash();
        }
        if (null !== $object->getValue()) {
            $data->{'value'} = $object->getValue();
        }
        if (null !== $object->getCreationDate()) {
            $data->{'creation_date'} = $object->getCreationDate();
        }
        if (null !== $object->getPath()) {
            $values = array();
            foreach ($object->getPath() as $value) {
                $values[] = $value;
            }
            $data->{'path'} = $values;
        }
        if (null !== $object->getFee()) {
            $data->{'fee'} = $object->getFee();
        }
        return $data;
    }
}
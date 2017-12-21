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
class InvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\Invoice') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\Invoice) {
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
        $object = new \LightningSale\LndRest\Model\Invoice();
        if (property_exists($data, 'memo')) {
            $object->setMemo($data->{'memo'});
        }
        if (property_exists($data, 'receipt')) {
            $object->setReceipt($data->{'receipt'});
        }
        if (property_exists($data, 'r_preimage')) {
            $object->setRPreimage($data->{'r_preimage'});
        }
        if (property_exists($data, 'r_hash')) {
            $object->setRHash($data->{'r_hash'});
        }
        if (property_exists($data, 'value')) {
            $object->setValue($data->{'value'});
        }
        if (property_exists($data, 'settled')) {
            $object->setSettled($data->{'settled'});
        }
        if (property_exists($data, 'creation_date')) {
            $object->setCreationDate($data->{'creation_date'});
        }
        if (property_exists($data, 'settle_date')) {
            $object->setSettleDate($data->{'settle_date'});
        }
        if (property_exists($data, 'payment_request')) {
            $object->setPaymentRequest($data->{'payment_request'});
        }
        if (property_exists($data, 'description_hash')) {
            $object->setDescriptionHash($data->{'description_hash'});
        }
        if (property_exists($data, 'expiry')) {
            $object->setExpiry($data->{'expiry'});
        }
        if (property_exists($data, 'fallback_addr')) {
            $object->setFallbackAddr($data->{'fallback_addr'});
        }
        if (property_exists($data, 'cltv_expiry')) {
            $object->setCltvExpiry($data->{'cltv_expiry'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getMemo()) {
            $data->{'memo'} = $object->getMemo();
        }
        if (null !== $object->getReceipt()) {
            $data->{'receipt'} = $object->getReceipt();
        }
        if (null !== $object->getRPreimage()) {
            $data->{'r_preimage'} = $object->getRPreimage();
        }
        if (null !== $object->getRHash()) {
            $data->{'r_hash'} = $object->getRHash();
        }
        if (null !== $object->getValue()) {
            $data->{'value'} = $object->getValue();
        }
        if (null !== $object->getSettled()) {
            $data->{'settled'} = $object->getSettled();
        }
        if (null !== $object->getCreationDate()) {
            $data->{'creation_date'} = $object->getCreationDate();
        }
        if (null !== $object->getSettleDate()) {
            $data->{'settle_date'} = $object->getSettleDate();
        }
        if (null !== $object->getPaymentRequest()) {
            $data->{'payment_request'} = $object->getPaymentRequest();
        }
        if (null !== $object->getDescriptionHash()) {
            $data->{'description_hash'} = $object->getDescriptionHash();
        }
        if (null !== $object->getExpiry()) {
            $data->{'expiry'} = $object->getExpiry();
        }
        if (null !== $object->getFallbackAddr()) {
            $data->{'fallback_addr'} = $object->getFallbackAddr();
        }
        if (null !== $object->getCltvExpiry()) {
            $data->{'cltv_expiry'} = $object->getCltvExpiry();
        }
        return $data;
    }
}
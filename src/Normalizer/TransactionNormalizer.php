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
class TransactionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\Transaction') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\Transaction) {
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
        $object = new \LightningSale\LndRest\Model\Transaction();
        if (property_exists($data, 'tx_hash')) {
            $object->setTxHash($data->{'tx_hash'});
        }
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'num_confirmations')) {
            $object->setNumConfirmations($data->{'num_confirmations'});
        }
        if (property_exists($data, 'block_hash')) {
            $object->setBlockHash($data->{'block_hash'});
        }
        if (property_exists($data, 'block_height')) {
            $object->setBlockHeight($data->{'block_height'});
        }
        if (property_exists($data, 'time_stamp')) {
            $object->setTimeStamp($data->{'time_stamp'});
        }
        if (property_exists($data, 'total_fees')) {
            $object->setTotalFees($data->{'total_fees'});
        }
        if (property_exists($data, 'dest_addresses')) {
            $values = array();
            foreach ($data->{'dest_addresses'} as $value) {
                $values[] = $value;
            }
            $object->setDestAddresses($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTxHash()) {
            $data->{'tx_hash'} = $object->getTxHash();
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getNumConfirmations()) {
            $data->{'num_confirmations'} = $object->getNumConfirmations();
        }
        if (null !== $object->getBlockHash()) {
            $data->{'block_hash'} = $object->getBlockHash();
        }
        if (null !== $object->getBlockHeight()) {
            $data->{'block_height'} = $object->getBlockHeight();
        }
        if (null !== $object->getTimeStamp()) {
            $data->{'time_stamp'} = $object->getTimeStamp();
        }
        if (null !== $object->getTotalFees()) {
            $data->{'total_fees'} = $object->getTotalFees();
        }
        if (null !== $object->getDestAddresses()) {
            $values = array();
            foreach ($object->getDestAddresses() as $value) {
                $values[] = $value;
            }
            $data->{'dest_addresses'} = $values;
        }
        return $data;
    }
}
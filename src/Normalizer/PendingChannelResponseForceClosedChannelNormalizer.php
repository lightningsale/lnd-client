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
use LightningSale\LndRest\Model\PendingHTLC;
use LightningSale\LndRest\Model\PendingChannelResponsePendingChannel;

class PendingChannelResponseForceClosedChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\PendingChannelResponseForceClosedChannel') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\PendingChannelResponseForceClosedChannel) {
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
        $object = new \LightningSale\LndRest\Model\PendingChannelResponseForceClosedChannel();
        if (property_exists($data, 'channel')) {
            $object->setChannel($this->denormalizer->denormalize($data->{'channel'}, PendingChannelResponsePendingChannel::class, 'json', $context));
        }
        if (property_exists($data, 'closing_txid')) {
            $object->setClosingTxid($data->{'closing_txid'});
        }
        if (property_exists($data, 'limbo_balance')) {
            $object->setLimboBalance($data->{'limbo_balance'});
        }
        if (property_exists($data, 'maturity_height')) {
            $object->setMaturityHeight($data->{'maturity_height'});
        }
        if (property_exists($data, 'blocks_til_maturity')) {
            $object->setBlocksTilMaturity($data->{'blocks_til_maturity'});
        }
        if (property_exists($data, 'recovered_balance')) {
            $object->setRecoveredBalance($data->{'recovered_balance'});
        }
        if (property_exists($data, 'pending_htlcs')) {
            $values = array();
            foreach ($data->{'pending_htlcs'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, PendingHTLC::class, 'json', $context);
            }
            $object->setPendingHtlcs($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChannel()) {
            $data->{'channel'} = $this->normalizer->normalize($object->getChannel(), 'json', $context);
        }
        if (null !== $object->getClosingTxid()) {
            $data->{'closing_txid'} = $object->getClosingTxid();
        }
        if (null !== $object->getLimboBalance()) {
            $data->{'limbo_balance'} = $object->getLimboBalance();
        }
        if (null !== $object->getMaturityHeight()) {
            $data->{'maturity_height'} = $object->getMaturityHeight();
        }
        if (null !== $object->getBlocksTilMaturity()) {
            $data->{'blocks_til_maturity'} = $object->getBlocksTilMaturity();
        }
        if (null !== $object->getRecoveredBalance()) {
            $data->{'recovered_balance'} = $object->getRecoveredBalance();
        }
        if (null !== $object->getPendingHtlcs()) {
            $values = array();
            foreach ($object->getPendingHtlcs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'pending_htlcs'} = $values;
        }
        return $data;
    }
}
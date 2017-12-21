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
use LightningSale\LndRest\Model\HTLC;

class ActiveChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\ActiveChannel') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\ActiveChannel) {
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
        $object = new \LightningSale\LndRest\Model\ActiveChannel();
        if (property_exists($data, 'active')) {
            $object->setActive($data->{'active'});
        }
        if (property_exists($data, 'remote_pubkey')) {
            $object->setRemotePubkey($data->{'remote_pubkey'});
        }
        if (property_exists($data, 'channel_point')) {
            $object->setChannelPoint($data->{'channel_point'});
        }
        if (property_exists($data, 'chan_id')) {
            $object->setChanId($data->{'chan_id'});
        }
        if (property_exists($data, 'capacity')) {
            $object->setCapacity($data->{'capacity'});
        }
        if (property_exists($data, 'local_balance')) {
            $object->setLocalBalance($data->{'local_balance'});
        }
        if (property_exists($data, 'remote_balance')) {
            $object->setRemoteBalance($data->{'remote_balance'});
        }
        if (property_exists($data, 'commit_fee')) {
            $object->setCommitFee($data->{'commit_fee'});
        }
        if (property_exists($data, 'commit_weight')) {
            $object->setCommitWeight($data->{'commit_weight'});
        }
        if (property_exists($data, 'fee_per_kw')) {
            $object->setFeePerKw($data->{'fee_per_kw'});
        }
        if (property_exists($data, 'unsettled_balance')) {
            $object->setUnsettledBalance($data->{'unsettled_balance'});
        }
        if (property_exists($data, 'total_satoshis_sent')) {
            $object->setTotalSatoshisSent($data->{'total_satoshis_sent'});
        }
        if (property_exists($data, 'total_satoshis_received')) {
            $object->setTotalSatoshisReceived($data->{'total_satoshis_received'});
        }
        if (property_exists($data, 'num_updates')) {
            $object->setNumUpdates($data->{'num_updates'});
        }
        if (property_exists($data, 'pending_htlcs')) {
            $values = array();
            foreach ($data->{'pending_htlcs'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, HTLC::class, 'json', $context);
            }
            $object->setPendingHtlcs($values);
        }
        if (property_exists($data, 'csv_delay')) {
            $object->setCsvDelay($data->{'csv_delay'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getActive()) {
            $data->{'active'} = $object->getActive();
        }
        if (null !== $object->getRemotePubkey()) {
            $data->{'remote_pubkey'} = $object->getRemotePubkey();
        }
        if (null !== $object->getChannelPoint()) {
            $data->{'channel_point'} = $object->getChannelPoint();
        }
        if (null !== $object->getChanId()) {
            $data->{'chan_id'} = $object->getChanId();
        }
        if (null !== $object->getCapacity()) {
            $data->{'capacity'} = $object->getCapacity();
        }
        if (null !== $object->getLocalBalance()) {
            $data->{'local_balance'} = $object->getLocalBalance();
        }
        if (null !== $object->getRemoteBalance()) {
            $data->{'remote_balance'} = $object->getRemoteBalance();
        }
        if (null !== $object->getCommitFee()) {
            $data->{'commit_fee'} = $object->getCommitFee();
        }
        if (null !== $object->getCommitWeight()) {
            $data->{'commit_weight'} = $object->getCommitWeight();
        }
        if (null !== $object->getFeePerKw()) {
            $data->{'fee_per_kw'} = $object->getFeePerKw();
        }
        if (null !== $object->getUnsettledBalance()) {
            $data->{'unsettled_balance'} = $object->getUnsettledBalance();
        }
        if (null !== $object->getTotalSatoshisSent()) {
            $data->{'total_satoshis_sent'} = $object->getTotalSatoshisSent();
        }
        if (null !== $object->getTotalSatoshisReceived()) {
            $data->{'total_satoshis_received'} = $object->getTotalSatoshisReceived();
        }
        if (null !== $object->getNumUpdates()) {
            $data->{'num_updates'} = $object->getNumUpdates();
        }
        if (null !== $object->getPendingHtlcs()) {
            $values = array();
            foreach ($object->getPendingHtlcs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'pending_htlcs'} = $values;
        }
        if (null !== $object->getCsvDelay()) {
            $data->{'csv_delay'} = $object->getCsvDelay();
        }
        return $data;
    }
}
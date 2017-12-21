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
class OpenChannelRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\OpenChannelRequest') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\OpenChannelRequest) {
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
        $object = new \LightningSale\LndRest\Model\OpenChannelRequest();
        if (property_exists($data, 'target_peer_id')) {
            $object->setTargetPeerId($data->{'target_peer_id'});
        }
        if (property_exists($data, 'node_pubkey')) {
            $object->setNodePubkey($data->{'node_pubkey'});
        }
        if (property_exists($data, 'node_pubkey_string')) {
            $object->setNodePubkeyString($data->{'node_pubkey_string'});
        }
        if (property_exists($data, 'local_funding_amount')) {
            $object->setLocalFundingAmount($data->{'local_funding_amount'});
        }
        if (property_exists($data, 'push_sat')) {
            $object->setPushSat($data->{'push_sat'});
        }
        if (property_exists($data, 'target_conf')) {
            $object->setTargetConf($data->{'target_conf'});
        }
        if (property_exists($data, 'sat_per_byte')) {
            $object->setSatPerByte($data->{'sat_per_byte'});
        }
        if (property_exists($data, 'private')) {
            $object->setPrivate($data->{'private'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTargetPeerId()) {
            $data->{'target_peer_id'} = $object->getTargetPeerId();
        }
        if (null !== $object->getNodePubkey()) {
            $data->{'node_pubkey'} = $object->getNodePubkey();
        }
        if (null !== $object->getNodePubkeyString()) {
            $data->{'node_pubkey_string'} = $object->getNodePubkeyString();
        }
        if (null !== $object->getLocalFundingAmount()) {
            $data->{'local_funding_amount'} = $object->getLocalFundingAmount();
        }
        if (null !== $object->getPushSat()) {
            $data->{'push_sat'} = $object->getPushSat();
        }
        if (null !== $object->getTargetConf()) {
            $data->{'target_conf'} = $object->getTargetConf();
        }
        if (null !== $object->getSatPerByte()) {
            $data->{'sat_per_byte'} = $object->getSatPerByte();
        }
        if (null !== $object->getPrivate()) {
            $data->{'private'} = $object->getPrivate();
        }
        return $data;
    }
}
<?php

namespace LightningSale\LndRest\Normalizer;

use LightningSale\LndRest\Jane\Reference;
use LightningSale\LndRest\Model\GetInfoResponse;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GetInfoResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return !($type !== GetInfoResponse::class);
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof GetInfoResponse;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new GetInfoResponse();
        if (property_exists($data, 'identity_pubkey')) {
            $object->setIdentityPubkey($data->{'identity_pubkey'});
        }
        if (property_exists($data, 'alias')) {
            $object->setAlias($data->{'alias'});
        }
        if (property_exists($data, 'num_pending_channels')) {
            $object->setNumPendingChannels($data->{'num_pending_channels'});
        }
        if (property_exists($data, 'num_active_channels')) {
            $object->setNumActiveChannels($data->{'num_active_channels'});
        }
        if (property_exists($data, 'num_peers')) {
            $object->setNumPeers($data->{'num_peers'});
        }
        if (property_exists($data, 'block_height')) {
            $object->setBlockHeight($data->{'block_height'});
        }
        if (property_exists($data, 'block_hash')) {
            $object->setBlockHash($data->{'block_hash'});
        }
        if (property_exists($data, 'synced_to_chain')) {
            $object->setSyncedToChain($data->{'synced_to_chain'});
        }
        if (property_exists($data, 'testnet')) {
            $object->setTestnet($data->{'testnet'});
        }
        if (property_exists($data, 'chains')) {
            $values = array();
            foreach ($data->{'chains'} as $value) {
                $values[] = $value;
            }
            $object->setChains($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getIdentityPubkey()) {
            $data->{'identity_pubkey'} = $object->getIdentityPubkey();
        }
        if (null !== $object->getAlias()) {
            $data->{'alias'} = $object->getAlias();
        }
        if (null !== $object->getNumPendingChannels()) {
            $data->{'num_pending_channels'} = $object->getNumPendingChannels();
        }
        if (null !== $object->getNumActiveChannels()) {
            $data->{'num_active_channels'} = $object->getNumActiveChannels();
        }
        if (null !== $object->getNumPeers()) {
            $data->{'num_peers'} = $object->getNumPeers();
        }
        if (null !== $object->getBlockHeight()) {
            $data->{'block_height'} = $object->getBlockHeight();
        }
        if (null !== $object->getBlockHash()) {
            $data->{'block_hash'} = $object->getBlockHash();
        }
        if (null !== $object->getSyncedToChain()) {
            $data->{'synced_to_chain'} = $object->getSyncedToChain();
        }
        if (null !== $object->getTestnet()) {
            $data->{'testnet'} = $object->getTestnet();
        }
        if (null !== $object->getChains()) {
            $values = array();
            foreach ($object->getChains() as $value) {
                $values[] = $value;
            }
            $data->{'chains'} = $values;
        }
        return $data;
    }
}
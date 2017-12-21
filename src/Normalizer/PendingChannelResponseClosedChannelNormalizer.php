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
use LightningSale\LndRest\Model\PendingChannelResponsePendingChannel;

class PendingChannelResponseClosedChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\PendingChannelResponseClosedChannel') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\PendingChannelResponseClosedChannel) {
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
        $object = new \LightningSale\LndRest\Model\PendingChannelResponseClosedChannel();
        if (property_exists($data, 'channel')) {
            $object->setChannel($this->denormalizer->denormalize($data->{'channel'}, PendingChannelResponsePendingChannel::class, 'json', $context));
        }
        if (property_exists($data, 'closing_txid')) {
            $object->setClosingTxid($data->{'closing_txid'});
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
        return $data;
    }
}
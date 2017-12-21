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
use LightningSale\LndRest\Model\PendingChannelResponsePendingChannel;

class PendingChannelResponsePendingOpenChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\PendingChannelResponsePendingOpenChannel') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\PendingChannelResponsePendingOpenChannel) {
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
        $object = new \LightningSale\LndRest\Model\PendingChannelResponsePendingOpenChannel();
        if (property_exists($data, 'channel')) {
            $object->setChannel($this->denormalizer->denormalize($data->{'channel'}, PendingChannelResponsePendingChannel::class, 'json', $context));
        }
        if (property_exists($data, 'confirmation_height')) {
            $object->setConfirmationHeight($data->{'confirmation_height'});
        }
        if (property_exists($data, 'blocks_till_open')) {
            $object->setBlocksTillOpen($data->{'blocks_till_open'});
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
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChannel()) {
            $data->{'channel'} = $this->normalizer->normalize($object->getChannel(), 'json', $context);
        }
        if (null !== $object->getConfirmationHeight()) {
            $data->{'confirmation_height'} = $object->getConfirmationHeight();
        }
        if (null !== $object->getBlocksTillOpen()) {
            $data->{'blocks_till_open'} = $object->getBlocksTillOpen();
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
        return $data;
    }
}
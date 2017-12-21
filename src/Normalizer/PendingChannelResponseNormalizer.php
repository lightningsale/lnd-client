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
use LightningSale\LndRest\Model\PendingChannelResponseForceClosedChannel;
use LightningSale\LndRest\Model\PendingChannelResponseClosedChannel;
use LightningSale\LndRest\Model\PendingChannelResponsePendingOpenChannel;

class PendingChannelResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\PendingChannelResponse') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\PendingChannelResponse) {
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
        $object = new \LightningSale\LndRest\Model\PendingChannelResponse();
        if (property_exists($data, 'total_limbo_balance')) {
            $object->setTotalLimboBalance($data->{'total_limbo_balance'});
        }
        if (property_exists($data, 'pending_open_channels')) {
            $values = array();
            foreach ($data->{'pending_open_channels'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, PendingChannelResponsePendingOpenChannel::class, 'json', $context);
            }
            $object->setPendingOpenChannels($values);
        }
        if (property_exists($data, 'pending_closing_channels')) {
            $values_1 = array();
            foreach ($data->{'pending_closing_channels'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, PendingChannelResponseClosedChannel::class, 'json', $context);
            }
            $object->setPendingClosingChannels($values_1);
        }
        if (property_exists($data, 'pending_force_closing_channels')) {
            $values_2 = array();
            foreach ($data->{'pending_force_closing_channels'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, PendingChannelResponseForceClosedChannel::class, 'json', $context);
            }
            $object->setPendingForceClosingChannels($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTotalLimboBalance()) {
            $data->{'total_limbo_balance'} = $object->getTotalLimboBalance();
        }
        if (null !== $object->getPendingOpenChannels()) {
            $values = array();
            foreach ($object->getPendingOpenChannels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'pending_open_channels'} = $values;
        }
        if (null !== $object->getPendingClosingChannels()) {
            $values_1 = array();
            foreach ($object->getPendingClosingChannels() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'pending_closing_channels'} = $values_1;
        }
        if (null !== $object->getPendingForceClosingChannels()) {
            $values_2 = array();
            foreach ($object->getPendingForceClosingChannels() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'pending_force_closing_channels'} = $values_2;
        }
        return $data;
    }
}
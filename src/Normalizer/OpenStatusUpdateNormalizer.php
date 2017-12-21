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
use LightningSale\LndRest\Model\ChannelOpenUpdate;
use LightningSale\LndRest\Model\ConfirmationUpdate;
use LightningSale\LndRest\Model\PendingUpdate;

class OpenStatusUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\OpenStatusUpdate') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\OpenStatusUpdate) {
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
        $object = new \LightningSale\LndRest\Model\OpenStatusUpdate();
        if (property_exists($data, 'chan_pending')) {
            $object->setChanPending($this->denormalizer->denormalize($data->{'chan_pending'}, PendingUpdate::class, 'json', $context));
        }
        if (property_exists($data, 'confirmation')) {
            $object->setConfirmation($this->denormalizer->denormalize($data->{'confirmation'}, ConfirmationUpdate::class, 'json', $context));
        }
        if (property_exists($data, 'chan_open')) {
            $object->setChanOpen($this->denormalizer->denormalize($data->{'chan_open'}, ChannelOpenUpdate::class, 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChanPending()) {
            $data->{'chan_pending'} = $this->normalizer->normalize($object->getChanPending(), 'json', $context);
        }
        if (null !== $object->getConfirmation()) {
            $data->{'confirmation'} = $this->normalizer->normalize($object->getConfirmation(), 'json', $context);
        }
        if (null !== $object->getChanOpen()) {
            $data->{'chan_open'} = $this->normalizer->normalize($object->getChanOpen(), 'json', $context);
        }
        return $data;
    }
}
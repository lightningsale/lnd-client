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
use LightningSale\LndRest\Model\ChannelCloseUpdate;
use LightningSale\LndRest\Model\ConfirmationUpdate;
use LightningSale\LndRest\Model\PendingUpdate;

class CloseStatusUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\CloseStatusUpdate') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\CloseStatusUpdate) {
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
        $object = new \LightningSale\LndRest\Model\CloseStatusUpdate();
        if (property_exists($data, 'close_pending')) {
            $object->setClosePending($this->denormalizer->denormalize($data->{'close_pending'}, PendingUpdate::class, 'json', $context));
        }
        if (property_exists($data, 'confirmation')) {
            $object->setConfirmation($this->denormalizer->denormalize($data->{'confirmation'}, ConfirmationUpdate::class, 'json', $context));
        }
        if (property_exists($data, 'chan_close')) {
            $object->setChanClose($this->denormalizer->denormalize($data->{'chan_close'}, ChannelCloseUpdate::class, 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getClosePending()) {
            $data->{'close_pending'} = $this->normalizer->normalize($object->getClosePending(), 'json', $context);
        }
        if (null !== $object->getConfirmation()) {
            $data->{'confirmation'} = $this->normalizer->normalize($object->getConfirmation(), 'json', $context);
        }
        if (null !== $object->getChanClose()) {
            $data->{'chan_close'} = $this->normalizer->normalize($object->getChanClose(), 'json', $context);
        }
        return $data;
    }
}
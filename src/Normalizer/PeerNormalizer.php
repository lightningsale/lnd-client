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
class PeerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\Peer') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\Peer) {
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
        $object = new \LightningSale\LndRest\Model\Peer();
        if (property_exists($data, 'pub_key')) {
            $object->setPubKey($data->{'pub_key'});
        }
        if (property_exists($data, 'peer_id')) {
            $object->setPeerId($data->{'peer_id'});
        }
        if (property_exists($data, 'address')) {
            $object->setAddress($data->{'address'});
        }
        if (property_exists($data, 'bytes_sent')) {
            $object->setBytesSent($data->{'bytes_sent'});
        }
        if (property_exists($data, 'bytes_recv')) {
            $object->setBytesRecv($data->{'bytes_recv'});
        }
        if (property_exists($data, 'sat_sent')) {
            $object->setSatSent($data->{'sat_sent'});
        }
        if (property_exists($data, 'sat_recv')) {
            $object->setSatRecv($data->{'sat_recv'});
        }
        if (property_exists($data, 'inbound')) {
            $object->setInbound($data->{'inbound'});
        }
        if (property_exists($data, 'ping_time')) {
            $object->setPingTime($data->{'ping_time'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getPubKey()) {
            $data->{'pub_key'} = $object->getPubKey();
        }
        if (null !== $object->getPeerId()) {
            $data->{'peer_id'} = $object->getPeerId();
        }
        if (null !== $object->getAddress()) {
            $data->{'address'} = $object->getAddress();
        }
        if (null !== $object->getBytesSent()) {
            $data->{'bytes_sent'} = $object->getBytesSent();
        }
        if (null !== $object->getBytesRecv()) {
            $data->{'bytes_recv'} = $object->getBytesRecv();
        }
        if (null !== $object->getSatSent()) {
            $data->{'sat_sent'} = $object->getSatSent();
        }
        if (null !== $object->getSatRecv()) {
            $data->{'sat_recv'} = $object->getSatRecv();
        }
        if (null !== $object->getInbound()) {
            $data->{'inbound'} = $object->getInbound();
        }
        if (null !== $object->getPingTime()) {
            $data->{'ping_time'} = $object->getPingTime();
        }
        return $data;
    }
}
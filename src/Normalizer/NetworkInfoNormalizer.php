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
class NetworkInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\NetworkInfo') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\NetworkInfo) {
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
        $object = new \LightningSale\LndRest\Model\NetworkInfo();
        if (property_exists($data, 'graph_diameter')) {
            $object->setGraphDiameter($data->{'graph_diameter'});
        }
        if (property_exists($data, 'avg_out_degree')) {
            $object->setAvgOutDegree($data->{'avg_out_degree'});
        }
        if (property_exists($data, 'max_out_degree')) {
            $object->setMaxOutDegree($data->{'max_out_degree'});
        }
        if (property_exists($data, 'num_nodes')) {
            $object->setNumNodes($data->{'num_nodes'});
        }
        if (property_exists($data, 'num_channels')) {
            $object->setNumChannels($data->{'num_channels'});
        }
        if (property_exists($data, 'total_network_capacity')) {
            $object->setTotalNetworkCapacity($data->{'total_network_capacity'});
        }
        if (property_exists($data, 'avg_channel_size')) {
            $object->setAvgChannelSize($data->{'avg_channel_size'});
        }
        if (property_exists($data, 'min_channel_size')) {
            $object->setMinChannelSize($data->{'min_channel_size'});
        }
        if (property_exists($data, 'max_channel_size')) {
            $object->setMaxChannelSize($data->{'max_channel_size'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getGraphDiameter()) {
            $data->{'graph_diameter'} = $object->getGraphDiameter();
        }
        if (null !== $object->getAvgOutDegree()) {
            $data->{'avg_out_degree'} = $object->getAvgOutDegree();
        }
        if (null !== $object->getMaxOutDegree()) {
            $data->{'max_out_degree'} = $object->getMaxOutDegree();
        }
        if (null !== $object->getNumNodes()) {
            $data->{'num_nodes'} = $object->getNumNodes();
        }
        if (null !== $object->getNumChannels()) {
            $data->{'num_channels'} = $object->getNumChannels();
        }
        if (null !== $object->getTotalNetworkCapacity()) {
            $data->{'total_network_capacity'} = $object->getTotalNetworkCapacity();
        }
        if (null !== $object->getAvgChannelSize()) {
            $data->{'avg_channel_size'} = $object->getAvgChannelSize();
        }
        if (null !== $object->getMinChannelSize()) {
            $data->{'min_channel_size'} = $object->getMinChannelSize();
        }
        if (null !== $object->getMaxChannelSize()) {
            $data->{'max_channel_size'} = $object->getMaxChannelSize();
        }
        return $data;
    }
}
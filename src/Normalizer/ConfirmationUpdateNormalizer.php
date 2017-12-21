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
class ConfirmationUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'LightningSale\\LndRest\\Model\\ConfirmationUpdate') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \LightningSale\LndRest\Model\ConfirmationUpdate) {
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
        $object = new \LightningSale\LndRest\Model\ConfirmationUpdate();
        if (property_exists($data, 'block_sha')) {
            $object->setBlockSha($data->{'block_sha'});
        }
        if (property_exists($data, 'block_height')) {
            $object->setBlockHeight($data->{'block_height'});
        }
        if (property_exists($data, 'num_confs_left')) {
            $object->setNumConfsLeft($data->{'num_confs_left'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getBlockSha()) {
            $data->{'block_sha'} = $object->getBlockSha();
        }
        if (null !== $object->getBlockHeight()) {
            $data->{'block_height'} = $object->getBlockHeight();
        }
        if (null !== $object->getNumConfsLeft()) {
            $data->{'num_confs_left'} = $object->getNumConfsLeft();
        }
        return $data;
    }
}
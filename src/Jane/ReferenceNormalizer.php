<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 21.12.17
 * Time: 12:06
 */

namespace LightningSale\LndRest\Jane;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ReferenceNormalizer implements NormalizerInterface
{
    /**
     * {@inheritDoc}
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $ref = new \stdClass();
        $ref->{'$ref'} = (string) $object->getReferenceUri();
        return $ref;
    }
    /**
     * {@inheritDoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        return ($data instanceof Reference);
    }
}
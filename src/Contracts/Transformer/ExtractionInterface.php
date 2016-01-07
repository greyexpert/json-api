<?php

namespace Greyexpert\JsonApi\Transformer;

interface ExtractionInterface
{
    /**
     * @param $object
     *
     * @return array
     */
    public function getAttributes($object);

    /**
     * @param $object
     * @param $included array
     *
     * @return array
     */
    public function getRelationships($object, $included = array());
}
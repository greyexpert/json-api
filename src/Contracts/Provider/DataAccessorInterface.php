<?php

namespace Greyexpert\JsonApi\Contracts\Provider;

interface DataAccessorInterface
{
    public function findObjectById($id);
    public function findObjectList($args);
    public function deleteObjectList($args);
    public function addObject($attributes, $relations = array());
    public function updateObject($object, $attributes, $relations = array());
    public function deleteObject($object);
}
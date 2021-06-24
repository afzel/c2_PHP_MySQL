<?php


namespace b2b\Mappers;


use b2b\Entities\EntityInterface;

interface MapperInterface
{
    /**
     * @param $id
     * @return EntityInterface
     */
    public function findById($id) : EntityInterface;
}
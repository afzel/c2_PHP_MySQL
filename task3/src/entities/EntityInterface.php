<?php


namespace b2b\Entities;


interface EntityInterface
{
    /**
     * @param $params
     * @return mixed
     */
    public static function from($params);

    /**
     * @return array
     */
    public function asArray() : array;
}
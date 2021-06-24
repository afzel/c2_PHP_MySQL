<?php


namespace b2b\Mappers;


use b2b\Adapters\AdapterInterface;
use b2b\Entities\EntityInterface;

class Mapper implements MapperInterface
{
    /**
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * Mapper constructor.
     * @param AdapterInterface $adapter
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @param $id
     * @return EntityInterface
     */
    public function findById($id) : EntityInterface
    {
        $found = $this->adapter->find($id);

        return $this->toObject($found);
    }

    /**
     * @param array $found
     * @return EntityInterface
     */
    protected function toObject(array $found) : EntityInterface
    {
        return EntityInterface::from($found);
    }
}
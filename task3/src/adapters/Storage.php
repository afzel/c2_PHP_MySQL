<?php


namespace b2b\Adapters;


class Storage implements AdapterInterface
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * Storage constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param null $id
     * @return array
     */
    public function find($id = null) : array
    {
        return $this->data[$id] ?? [];
    }

    /**
     * @param array $conditions
     * @return array
     */
    public function findAll(array $conditions = []) : array
    {
        $result = [];

        foreach ($conditions as $condition => $value) {
            foreach ($this->data as $id => $item) {
                if ($item->$condition === $value) {
                    $result[] = $item;
                }
            }
        }
        return $result;
    }

    /**
     * @param $name
     * @param $data
     * @return bool
     */
    public function add($name, $data) : bool
    {
        $this->data[$name] = $data;
        return true;
    }

    public function remove($name) : bool
    {
        unset($this->data[$name]);
        return true;
    }


}
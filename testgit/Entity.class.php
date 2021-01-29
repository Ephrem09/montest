<?php


Abstract class Entity implements SeekableIterator, Countable, ArrayAccess
{
    //private array $attributes = array();

    public function __get($name)
    {
        if (isset($name))
        {
            return $name;
        }
    }
    public function hydrate(array $donnees = array())
    {
        if(!Empty($donnees)){
            foreach ($donnees as $name => $value)
            {
                $method = 'set'.ucfirst($name);
                if (method_exists($this, $method))
                {
                    $this->$method($value);
                }
            }
        }

    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        // TODO: Implement current() method.
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        // TODO: Implement next() method.
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        // TODO: Implement key() method.
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        // TODO: Implement valid() method.
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        // TODO: Implement rewind() method.
    }

    /**
     * @inheritDoc
     */
    public function seek($position)
    {
        // TODO: Implement seek() method.
    }
    public function count()
    {
        // TODO: Implement count() method.
    }
    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }
    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }
    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }
    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }
}
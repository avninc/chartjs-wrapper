<?php

namespace Charts\Type;

abstract class Type
{
    protected $type;

    public function get()
    {
      return $this->type;
    }
    /**
     * Get the value of Type
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of Type
     *
     * @param mixed type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}

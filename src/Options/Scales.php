<?php

namespace Charts\Options;

abstract class Scales
{
    protected $scale;

    protected $options = [];

    public function get()
    {
      return $this->scale->options;
    }

    /**
     * Get the value of Scale
     *
     * @return mixed
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Set the value of Scale
     *
     * @param mixed scale
     *
     * @return self
     */
    public function setScale($scale)
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * Get the value of Options
     *
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set the value of Options
     *
     * @param mixed options
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

}

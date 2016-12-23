<?php

namespace Charts\Options;

use Charts\Utils;
use Charts\Options\Scales;

class Options
{
    /**
     * Will hold the entire options set array
     * @var array
     */
    protected $options = [];

    /**
     * Keep scales here
     * @var array
     */
    protected $scales = [];

    public function __construct($options=[], Scales $scale=null)
    {
      $this->setOptions($options);

      if($scale) {
        $this->setScales($scale);
      }
    }

    public function get()
    {
      // Set the data object
      if($this->getScales()) {
        $this->setOptions($this->getOptions() + $this->getScales()->get());
      }

      // Fix options so we can use callbacks properly
      $options = Utils::safeEncode($this->getOptions());

      return $options;
    }

    protected function fixOptions($options)
    {
      $_options = [];
      foreach($options as $key => $option) {
        if(is_array($option)) {
          $_options[$key] = $this->fixOptions($option);
        } else {
          if(strpos($option,'js:')===0) {
            $_options[$key] = substr($option, 3);
          } else {
            $_options[$key] = $option;
          }
        }
      }

      return $_options;
    }

    /**
     * Get the value of Will hold the entire options set array
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set the value of Will hold the entire options set array
     *
     * @param array options
     *
     * @return self
     */
    public function setOptions(array $options)
    {
        $this->options = $options;

        return $this;
    }


    /**
     * Get the value of Keep scales here
     *
     * @return array
     */
    public function getScales()
    {
        return $this->scales;
    }

    /**
     * Set the value of Keep scales here
     *
     * @param array scales
     *
     * @return self
     */
    public function setScales(array $scales)
    {
        $this->scales = $scales;

        return $this;
    }

}

<?php

namespace Charts;

use Charts\Options\Options;
use Charts\Data\Data;
use Charts\Type\Type;
use Charts\Utils;

class Chart
{
    /**
     * Type instance
     * @var Type
     */
    protected $type;
    /**
     * Data instance
     * @var Data
     */
    protected $data;
    /**
     * Options instance
     * @var Options
     */
    protected $options;

    /**
     * Element ID on the dom object
     * @var string
     */
    protected $elementId;

    /**
     * Name of the JS chart object
     * @var string
     */
    protected $chartObject = 'chart';

    public function __construct($elementId='myChart', Type $type=null, Data $data=null, Options $options=null)
    {
      $this->setElementId($elementId);

      if($type) {
        $this->setType($type);
      }

      if($data) {
        $this->setData($data);
      }

      if($options) {
        $this->setOptions($options);
      }
    }

    public function render()
    {
      $data = $this->data->get();
      $options = $this->options->get();
      $object = $this->chartObject;
      $contents = <<<EOF
var chartElement = document.getElementById("{$this->getElementId()}").getContext("2d");
var {$object} = new Chart(chartElement, {
    type: "{$this->type->get()}",
    data: $data,
    options: $options
});
EOF;
      return $contents;
    }

    /**
     * Get the value of Type instance
     *
     * @return Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of Type instance
     *
     * @param Type type
     *
     * @return self
     */
    public function setType(Type $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of Data instance
     *
     * @return Data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of Data instance
     *
     * @param Data data
     *
     * @return self
     */
    public function setData(Data $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of Options instance
     *
     * @return Options
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set the value of Options instance
     *
     * @param Options options
     *
     * @return self
     */
    public function setOptions(Options $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get the value of Element ID on the dom object
     *
     * @return string
     */
    public function getElementId()
    {
        return $this->elementId;
    }

    /**
     * Set the value of Element ID on the dom object
     *
     * @param string elementId
     *
     * @return self
     */
    public function setElementId($elementId)
    {
        $this->elementId = $elementId;

        return $this;
    }


}

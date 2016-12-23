<?php

namespace Charts\Data;

use Charts\Utils;

class Data
{
    /**
     * Will hold the datasets
     * @var array
     */
    protected $datasets = [];
    /**
     * Will hold the labels
     * @var array
     */
    protected $labels = [];
    /**
     * Will hold x lables
     * @var array
     */
    protected $xLabels = [];
    /**
     * Will hold the y lables
     * @var array
     */
    protected $yLabels = [];
    /**
     * Will hold the entire data set array
     * @var array
     */
    protected $data = [];

    public function __construct($datasets=[], $labels=[], $xLabels=[], $yLabels=[])
    {
      $this->setDatasets($datasets)
           ->setLabels($labels)
           ->setXLabels($xLabels)
           ->setYLabels($yLabels);
    }

    public function get()
    {
      // Set the data object
      $this->setData([
          'datasets' => $this->getDatasets(),
          'labels' => $this->getLabels(),
          'xLabels' => $this->getXLabels(),
          'yLabels' => $this->getYLabels(),
      ]);

      return Utils::encode($this->getData());
    }

    /**
     * Get the value of Will hold our entire data object
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of Will hold our entire data object
     *
     * @param array data
     *
     * @return self
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of Will hold the datasets
     *
     * @return array
     */
    public function getDatasets()
    {
        return $this->datasets;
    }

    /**
     * Set the value of Will hold the datasets
     *
     * @param array datasets
     *
     * @return self
     */
    public function setDatasets(array $datasets)
    {
        $this->datasets = $datasets;

        return $this;
    }

    /**
     * Get the value of Will hold the labels
     *
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Set the value of Will hold the labels
     *
     * @param array labels
     *
     * @return self
     */
    public function setLabels(array $labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Get the value of Will hold x lables
     *
     * @return array
     */
    public function getXLabels()
    {
        return $this->xLabels;
    }

    /**
     * Set the value of Will hold x lables
     *
     * @param array xLabels
     *
     * @return self
     */
    public function setXLabels(array $xLabels)
    {
        $this->xLabels = $xLabels;

        return $this;
    }

    /**
     * Get the value of Will hold the y lables
     *
     * @return array
     */
    public function getYLabels()
    {
        return $this->yLabels;
    }

    /**
     * Set the value of Will hold the y lables
     *
     * @param array yLabels
     *
     * @return self
     */
    public function setYLabels(array $yLabels)
    {
        $this->yLabels = $yLabels;

        return $this;
    }

}

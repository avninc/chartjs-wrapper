<?php
namespace Charts\Test;

use PHPUnit\Framework\TestCase;
use Charts\Chart;
use Charts\Type\Types\{Bar, Pie};
use Charts\Options\Options;
use Charts\Data\Data;

class ChartTest extends TestCase
{
    protected $chart;

    public function setUp()
    {
      parent::setUp();

      $data = new Data(['label' => '# of Votes', 'data' => [12, 19, 3, 5, 2, 3]], ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"]);
      $options = new Options(['responsive' => true]);
      $this->chart = new Chart('mycharts', (new Bar), $data, $options);
    }
    public function testChart()
    {
      $code = $this->chart->render();

      $this->assertContains('type: "bar"', $code);
    }
}

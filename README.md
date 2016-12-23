Chart.js PHP Fluid Interface
==============================

The idea of this package is to allow a fluid interface of generating chart.js JS chart code.

Simple Example

```php
$data = new Data(['label' => '# of Votes', 'data' => [12, 19, 3, 5, 2, 3]], ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"]);
$options = new Options(['responsive' => true]);
$chart = new Chart('mycharts', (new Bar), $data, $options);
$code = $chart->render();

// $code will look something like this:

var chartElement = document.getElementById("mycharts");
var chart = new Chart(chartElement, {
    type: "bar",
    data: {"datasets":{"label":"# of Votes","data":[12,19,3,5,2,3]},"labels":["Red","Blue","Yellow","Green","Purple","Orange"],"xLabels":[],"yLabels":[]},
    options: {"responsive":true}
});
```

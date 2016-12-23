<?php
require_once('../vendor/autoload.php');

use Charts\Chart;
use Charts\Type\Types\{Bar, Pie};
use Charts\Options\Options;
use Charts\Data\Data;

?>
<!doctype html>
<html>
<head>
</head>
<body>

  <?php
  $data = new Data([[
        'label' => '# of Votes',
        'data' => [12, 19, 3, 5, 2, 3],
        'backgroundColor' => [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
          'borderColor' => [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            'borderWidth' => 1
        ]], ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"]);
    $options = new Options(['responsive' => true, 'title' => ['display' => true, 'text' => 'custom title'], 'legend' => ['onHover' => 'js:function(event, legendItem) {console.log(event, legendItem)}', 'legendCallback' => 'js:function (chart) { console.log(chart); }'], 'scales' => ['yAxes' => [
        ['ticks' => ['beginAtZero' => true]]
      ]]]);

    $chart = new Chart('myChart', (new Bar), $data, $options);
    $code = $chart->render();

   ?>

  <div style="width:600px;height:600px;background-color:#fff;">
    <canvas id="myChart" width="500" height="500"></canvas>
  </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
<script>
<?php echo $chart->render(); ?>

</script>
</body>

</html>

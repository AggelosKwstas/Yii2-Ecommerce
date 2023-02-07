<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
AppAsset::register($this);
?>

<?php

?>


<body>
<div id="barChart" style="width: 500px;height:500px; margin-left: 35%"></div>
</body>

<?php
$script = <<< JS
let barChart = echarts.init(document.getElementById('barChart'));
barChart.setOption(makeBarChart($active,$non));
JS;
$this->registerJs($script);
?>



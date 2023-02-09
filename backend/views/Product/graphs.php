<?php

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>


<body>
<div class="py-5">
    <div class="container">
        <div class="row hidden-md-up">
            <div class="row">
                <div class="col-auto">
                    <div class="card">
                        <div class="card-block" style="width: 500px">
                            <div id="barChart" style="width: 450px;height:450px;margin-left: 15px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-body p-4">
                                <div class="col-auto">
                                    <div class="d-flex">
                                        <h5 class="flex-grow-1"><?php echo $data[0] ?></h5>
                                        <h5><?php echo $data[1] ?></h5>
                                    </div>
                                </div>

                                <div class="d-flex flex-column text-center mt-5 mb-4">
                                    <h6 class="display-4 mb-0 font-weight-bold"
                                        style="color: #1C2331;"> <?php echo $data[2] ?>°C </h6>
                                    <span class="small" style="color: #868B94"><?php echo $data[3] ?></span>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1" style="font-size: 1rem;">
                                        <div><i class="fas fa-wind fa-fw" style="color: #868B94;"></i> <span
                                                    class="ms-1"> <?php echo $data[4] ?>km/h
                  </span></div>
                                        <h6>Feels like: <b><?php echo $data[5]?>°C</b></h6>
                                    </div>
                                    <div>
                                        <img src="<?php echo $image ?>"
                                             width="60px">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<?php
$script = <<< JS
let barChart = echarts.init(document.getElementById('barChart'));
barChart.setOption(makeBarChart($active,$non));
JS;
$this->registerJs($script);
?>



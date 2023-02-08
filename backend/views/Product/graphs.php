<?php

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>


<body>
<div class="row">
    <div class="col">
        <div id="barChart" style="width: 500px;height:500px; margin-left: 35%"></div>
    </div>
    <div class="col">
        <div class="container py-5 h-100">

            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4">

                    <div class="card" style="color: #4B515D; border-radius: 35px;">
                        <div class="card-body p-4">

                            <div class="d-flex">
                                <h6 class="flex-grow-1"><?php echo $data[0] ?></h6>
                                <h6><?php echo $data[1] ?></h6>
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
                                    <div><i class="fas fa-tint fa-fw" style="color: #868B94;"></i> <span
                                                class="ms-1"> <?php echo $data[5] ?>% </span>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo $image ?>"
                                         width="100px">
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



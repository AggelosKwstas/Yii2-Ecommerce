<?php

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

?>


<body>
<table>
    <tr>
        <td>
            <div id="card-container">
                <div id="barChart" style="width: 100%;height:100%"></div>
            </div>
        </td>

        <td>
            <div id="card-container">
                <div id="barChart2" style="width: 100%;height:100%"></div>
            </div>
        </td>
        <td>
            <div id="card-container">
                <div id="barChart3" style="width: 100%;height:100%"></div>
            </div>
        </td>
    </tr>
    <!--<tr>-->
    <!--    <td>-->
    <!--        <div class="card">-->
    <!--            <div id="barChart11" style="width: 100%;height:100%;"></div>-->
    <!--        </div>-->
    <!--    </td>-->
    <!--    <td>-->
    <!--        <div class="card">-->
    <!--            <div id="barChart22" style="width: 100%;height:100%;"></div>-->
    <!--        </div>-->
    <!--    </td>-->
    <!--    <td>-->
    <!--        <div class="card">-->
    <!--            <div id="barChart33" style="width: 100%;height:100%;"></div>-->
    <!--        </div>-->
    <!---->
    <!--    </td>-->
    <!--</tr>-->

</table>


<!---->
<!--<div class="py-5">-->
<!--    <div class="container">-->
<!--        <div class="row hidden-md-up">-->
<!--            <div class="row">-->
<!--                <div class="col-auto">-->
<!--                    <div class="card">-->
<!--                        <div class="card-block" style="width: 500px">-->
<!--                            <div id="barChart" style="width: 450px;height:450px;margin-left: 15px"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-auto" style="margin-left: 30px">-->
<!--                    <div class="card">-->
<!--                        <div class="card-block" style="width: 500px">-->
<!--                            <div class="card-body p-4">-->
<!--                                <div class="col-auto">-->
<!--                                    <div class="d-flex">-->
<!--                                        <h5 class="flex-grow-1">--><?php //echo $data[0] ?><!--</h5>-->
<!--                                        <h5>--><?php //echo $data[1] ?><!--</h5>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="d-flex flex-column text-center mt-5 mb-4">-->
<!--                                    <h6 class="display-4 mb-0 font-weight-bold"-->
<!--                                        style="color: #1C2331;"> --><?php //echo $data[2] ?><!--°C </h6>-->
<!--                                    <span class="small" style="color: #868B94">-->
<?php //echo $data[3] ?><!--</span>-->
<!--                                </div>-->
<!---->
<!--                                <div class="d-flex align-items-center">-->
<!--                                    <div class="flex-grow-1" style="font-size: 1rem;">-->
<!--                                        <div><i class="fas fa-wind fa-fw" style="color: #868B94;"></i> <span-->
<!--                                                    class="ms-1"> --><?php //echo $data[4] ?><!--km/h-->
<!--                  </span></div>-->
<!--                                        <h6>Feels like: <b>--><?php //echo $data[5]?><!--°C</b></h6>-->
<!--                                    </div>-->
<!--                                    <div>-->
<!--                                        <img src="--><?php //echo $image ?><!--"-->
<!--                                             width="60px">-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

</body>

<?php
$script = <<< JS
let barChart = echarts.init(document.getElementById('barChart'));
let barChart2 = echarts.init(document.getElementById('barChart2'));
let barChart3 = echarts.init(document.getElementById('barChart3'));

// let barChart11 = echarts.init(document.getElementById('barChart11'));
// let barChart22 = echarts.init(document.getElementById('barChart22'));
// let barChart33 = echarts.init(document.getElementById('barChart33'));

//barChart11.setOption(makeBarChart($active,$non));
//barChart22.setOption(makeBarChart(10,23));
//barChart33.setOption(makeBarChart(23,50));

//barChart.setOption(makeBarChart($active,$non));
barChart.setOption(makeBlueChart());
barChart2.setOption(makeBlueChart());
barChart3.setOption(makeBlueChart());
JS;
$this->registerJs($script);
?>



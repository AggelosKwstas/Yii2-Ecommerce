<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\assets\AppAsset;
use backend\assets\FontAwesomeAsset;
use yii\helpers\Html;


AppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <?php $this->title = 'Bob-X' ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body id="page-top" style="background-color: #f9f9fb" onload="loadWait()">
    <?php $this->beginBody() ?>



    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a href="<?php  echo \yii\helpers\Url::to(['product/map']) ?>" class="logo"><img style="width: 200px;margin-left: 8px;margin-top: 20px" src="img/gaiaLogo.png" </a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="<?php
                    if(\yii\helpers\Url::current()==\yii\helpers\Url::to(['product/graphs']))
                        echo 'active';
                    ?>">
                        <a href="<?php echo \yii\helpers\Url::to(['product/graphs']) ?>"><span style="font-size: 25px" class="fa fa-home mr-3"></span> Home</a>
                    </li>
                    <li class="<?php
                    if(\yii\helpers\Url::current()==\yii\helpers\Url::to(['product/map']))
                        echo 'active';
                    ?>">
                        <a href="<?php  echo \yii\helpers\Url::to(['product/map']) ?>"><span style="font-size: 25px" class="fa fa-map-marked-alt mr-3"></span> Map</a>
                    </li>
                    <li class="<?php
                    if(\yii\helpers\Url::current()==\yii\helpers\Url::to(['product/login']))
                        echo 'active';
                    ?>">
                        <a href="<?php  echo \yii\helpers\Url::to(['product/login']) ?>"><span style="font-size: 25px" class="fa fa-cogs mr-3"></span>Services</a>
                    </li>
                </ul>
                <div class="footer">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Neuron Energy Solutions |

                    <a href="https://www.linkedin.com/company/neuron-energy-solutions/about/">
                        <i id="linkedin" class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://www.neuronenergy.com/">
                        <i id="globe" class="fa fa-light fa-globe"></i>
                    </a>
                    </p>
                </div>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <?php echo $content?>
        </div>
    </div>


        <div class="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
        <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();